<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestHandler;
use App\Mail\Internal\ProductEnquiryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    
    public function generateEmail(Request $request, String $emailType)
    {
        $mailable = self::getMailableType($request, $emailType);
    
        // !!! In production i would return the user to the page they where on and show a success message where the form was originally to let them know we received the email / Or send them a confirmation email or both
        return $mailable;
    }

    static function getMailableType(Request $request, String $emailType){

        switch ($emailType) {
            case 'product_enquiry':
                $mailable = self::generateProductEnquiryMail($request);
                break;
            
            default:
                // log error here send email to admin that email failed, no type selected
                break;
        }

        return $mailable;
    }

    static function generateProductEnquiryMail(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'product' => 'required',
            'message' => 'required|max:255'
        ]);

        $requestHandler = new RequestHandler(request());

        $data = [
            'page_refered_from' => url()->previous(),
            'name' => $requestHandler->getRequestData('name'),
            'email' => $requestHandler->getRequestData('email'),
            'phone' => $requestHandler->getRequestData('phone'),
            'product' => $requestHandler->getRequestData('product'),
            'message' => $requestHandler->getRequestData('message'),
        ];

        
        return new ProductEnquiryMail($data);
        // !!! This would be the ideal way of sending it on production the above return is just to get the email to render in the browser
        //Mail::to('lsi-support@lsi.co.uk')->queue(new ProductEnquiryMail($data));

        // Could email the customer to let them know we received the request 
       // Mail::to($request->email)->queue(new CustomerProductEnquiryMail($data));

        // Here i could define the users return page and return that back to the generateEmail function and handle the logic for a redict there

    }


}
