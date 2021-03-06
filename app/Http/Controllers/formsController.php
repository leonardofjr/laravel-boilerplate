<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\MailFormValidationRequest;
    use App\Http\Requests\NewsletterFormValidationRequest;
    use DB;
    use Mail;
    use App\Post; 

    class FormsController extends Controller {
     public function getGalleryTable() {
        $data = DB::table('gallery_uploads')->get();
        return response()->json($data);
     }
        public function postContact(MailFormValidationRequest $request) {
            dd($request);

            $data = [
                'name' => $request->input('contactFormName'),
                'email' => $request->input('contactFormEmail'),
                'inquiry' => $request->input('contactFormMessage'),
            ];

            Mail::send('emails.process', $data , function ($m) use ($data) {
            $m->from($data['email'], $data['name']);
            $m->to('leo@startupdesigns.ca')->subject('This mail is sent via contact form on beautybliss.ca');
        });

        return response()->json($data);
        }// postContact() Ends Here


    }
?>