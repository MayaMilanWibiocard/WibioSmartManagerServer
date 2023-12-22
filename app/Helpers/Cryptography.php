<?php

namespace App\Helpers;

use Symfony\Component\Uid\Ulid;
use Illuminate\Support\Str;
use PBurggraf\CRC\CRC16\Genibus;
use \PBurggraf\CRC\CRC32\CRC32;
use App\Models\ChaKey;

class Cryptography {
    public static function ChaChaDecoder($data)
    {
        $nonce = substr($data, 0, SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES);
        $data = base64_decode(substr($data, SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES));
        $key = ChaKey::where('keyName', 'desktopsecretkeys')->first();
        $jsonData = json_decode(
            sodium_crypto_aead_xchacha20poly1305_ietf_decrypt(
                $data,
                $nonce,
                $nonce,
                $key->keyValue
            )
        );
        return $jsonData;
    }

    public static function ChaChaEncoder($data)
    {
        $nonce = substr(str_replace('-', '', Str::ulid()->toRfc4122()), -SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES);
        $nonce= "96f0edaf5e5cdda63db7d166";
        $key = ChaKey::where('keyName', 'webserver')->first();
        $ret = sodium_crypto_aead_xchacha20poly1305_ietf_encrypt(
                    $data,
                    $nonce,
                    $nonce,
                    $key->keyValue
                );
        return $nonce.base64_encode($ret);        
    }

    public static function CrcCalucator($data, $crc)
    {
        if ($crc == null)
            return '';   
        switch($crc)
        {
            case 'Iso3309Crc16':
                $crc16AugCcitt = new Genibus();
                return strtoupper(dechex($crc16AugCcitt->calculate($data)));
            case 'CRC32':
                $crc32 = new CRC32();
                return strtoupper(dechex($crc32->calculate($data)));
            /// add new crc algos as requested
        }
    }


}