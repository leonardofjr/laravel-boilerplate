<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Mail;
    use Illuminate\Routing\Controller;
    use App\Post; 
    use DB;
    use Storage;    
    
    class PagesController extends Controller {
        public function getHomepage() {
        
            return view('frontend.pages.home');
        }

         public function getAboutPage() {
            return view('frontend.pages.about');
         }

         public function getTestimonialsPage() {
            return view('frontend.pages.testimonials');
         }

         public function getPricingPage() {
            return view('frontend.pages.pricing');
         } 

         public function getPortfolioPage() {
   //         $json = Storage::disk('public')->get('work_table.json');
    //        $json =  json_decode($json, true);
            
            return view('frontend.pages.portfolio');
         } 

   


         public function getContactPage() {
            return view('frontend.pages.contact');
         } 

    }
?>