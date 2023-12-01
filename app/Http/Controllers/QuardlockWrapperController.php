<?php

namespace App\Http\Controllers;

use Artisaninweb\SoapWrapper\SoapWrapper;
use Illuminate\Http\Request;
use App\Models\DesktopSecretKeys;

class QuardlockWrapperController extends Controller
{
    protected $soapWrapper;
    public function __construct(SoapWrapper $soapWrapper)
    {
        $this->soapWrapper = $soapWrapper;
        $this->middleware('auth.apikey');
    }    

    public function AuthenticateWithMode(string $cardid, string $cardotp, int $mode = 1)
    {
        try{
            $this->soapWrapper = new SoapWrapper();
            $this->soapWrapper->add('Authenticate', function ($service) {
                $service
                    ->wsdl('https://auth.quardlock.com/Services/OtpService.svc?wsdl')
                    ->trace(true);
            });
        
            // Without classmap
            $response = $this->soapWrapper->call('Authenticate.AuthenticateWithMode', [
                'body' => [
                    'apiKey' => '93862d8a-c727-4f29-9e31-57d3adc0c5f5',
                    'serialNumber'   => $cardid,
                    'otp'     => $cardotp,
                    'mode' => $mode,
                    'site' => "smart_manager_wrapper"
                ]
            ]);
        } 
        catch (Exception $e)
        {
            abort(400);
        }
        return $response;
    }


    public function LockTokenKey(string $cardid, int $mode=1)
    {
        try{
            $this->soapWrapper = new SoapWrapper();
            $this->soapWrapper->add('Authenticate', function ($service) {
                $service
                    ->wsdl('https://auth.quardlock.com/Services/OtpService.svc?wsdl')
                    ->trace(true);
            });
            $response = $this->soapWrapper->call('Authenticate.LockTokenKey', [
                'body' => [
                    'apiKey' => '93862d8a-c727-4f29-9e31-57d3adc0c5f5',
                    'serialNumber'   => $cardid,
                    'mode' => $mode,
                    'site' => "smart_manager_wrapper"
                ]
            ]);
        } 
        catch (Exception $e)
        {
            abort(400);
        }
        return true;
    }


    public function IsTokenKeyLocked(string $cardid, int $mode =1)
    {
        try{
            $this->soapWrapper = new SoapWrapper();
            $this->soapWrapper->add('Authenticate', function ($service) {
                $service
                    ->wsdl('https://auth.quardlock.com/Services/OtpService.svc?wsdl')
                    ->trace(true);
            });
            $response = $this->soapWrapper->call('Authenticate.IsTokenKeyLocked', [
                'body' => [
                    'apiKey' => '93862d8a-c727-4f29-9e31-57d3adc0c5f5',
                    'serialNumber' => $cardid,
                    'mode' => $mode,
                    'site' => "smart_manager_wrapper"
                ]
            ]);
        } 
        catch (Exception $e)
        {
            abort(400);
        }
        return $response;
    }
}

