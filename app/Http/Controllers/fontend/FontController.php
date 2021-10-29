<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SocialIcon;
use App\ContactUs;
use App\Slider;
use App\ContactUsTwo;
use App\Page;
use App\Menu;
use App\Service;
use App\GalleryCategory;
use App\About;
use App\AllPatient;
use App\Consultnt;
use App\Counter;
use App\Gallery;
use App\Logo;
use App\NewsEvent;
use App\ProductCategory;
use App\Products;
use App\SimpleSlider;
use App\Supported;
use App\HomeSeo;
use App\TechonoPageSeo;
use App\BlogPageSeo;
use App\ContactPageSeo;

class FontController extends Controller
{
    public function MainIndex(){

    	$data['socialIcon'] = SocialIcon::get();
    	$data['Service'] = Service::get();
    	$data['slide'] = Slider::get();
        $data['ProductCategory'] = ProductCategory::get();
        $data['simple_slider'] = SimpleSlider::get();
    	$data['contact'] = ContactUs::where('id','1')->first();
        $data['logo'] = Logo::where('id','1')->first();
    	$data['contact_two'] = ContactUsTwo::where('id','1')->first();
        $data['About'] = About::where('id','1')->first();
    	$data['object'] = Page::where('id','5')->first();
        // $object = Page::where('title_uri',$slug)->first();
        $data['counter'] = Counter::where('id','1')->first();

    	 $data['main'] = Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();

            $data['home'] = HomeSeo::where('id','1')->first();

            $data['quick_link'] = Menu::orderBy('sequence','ASC')
            ->where('important_link','important_link')
            ->get();

        $data['all_patient'] = AllPatient::get();
        $data['consu'] = Consultnt::OrderBy('id','desc')->take(8)->get();
        $data['news'] = NewsEvent::OrderBy('id','desc')->take(6)->get();
        $data['gallery'] = Gallery::OrderBy('id','desc')->take(6)->get();
        $data['supported'] = Supported::get();
        

    	return view('fontend/home',$data);
    }

    public function SeachingSystem(Request $request){


        $data['socialIcon'] = SocialIcon::get();
    	$data['Service'] = Service::get();
    	$data['slide'] = Slider::get();
        $data['ProductCategory'] = ProductCategory::get();
        $data['simple_slider'] = SimpleSlider::get();
    	$data['contact'] = ContactUs::where('id','1')->first();
        $data['logo'] = Logo::where('id','1')->first();
    	$data['contact_two'] = ContactUsTwo::where('id','1')->first();
        $data['About'] = About::where('id','1')->first();
    	$data['object'] = Page::where('id','5')->first();
        // $object = Page::where('title_uri',$slug)->first();
        $data['counter'] = Counter::where('id','1')->first();

    	 $data['main'] = Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();

            $data['quick_link'] = Menu::orderBy('sequence','ASC')
            ->where('important_link','important_link')
            ->get();

        $data['all_patient'] = AllPatient::get();
        $data['consu'] = Consultnt::OrderBy('id','desc')->take(8)->get();
        $data['news'] = NewsEvent::OrderBy('id','desc')->take(6)->get();
        $data['gallery'] = Gallery::OrderBy('id','desc')->take(6)->get();
        $data['supported'] = Supported::get();

        $data['news'] = NewsEvent::where('title', 'LIKE', "%$request->search%")->orWhere('summery', 'LIKE', "%$request->search%")->orWhere('description', 'LIKE', "%$request->search%")->paginate(10);
        

    	return view('fontend/single_page/search',$data);


    }

    public function AllConsultnt(){
      
        $data['socialIcon'] = SocialIcon::get();
    	$data['Service'] = Service::get();
    	$data['slide'] = Slider::get();
        $data['ProductCategory'] = ProductCategory::get();
        $data['simple_slider'] = SimpleSlider::get();
    	$data['contact'] = ContactUs::where('id','1')->first();
        $data['logo'] = Logo::where('id','1')->first();
    	$data['contact_two'] = ContactUsTwo::where('id','1')->first();
        $data['About'] = About::where('id','1')->first();
    	$data['object'] = Page::where('id','5')->first();
        // $object = Page::where('title_uri',$slug)->first();
        $data['counter'] = Counter::where('id','1')->first();

    	 $data['main'] = Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();

            $data['consultnt'] = TechonoPageSeo::where('id','1')->first();

            $data['quick_link'] = Menu::orderBy('sequence','ASC')
            ->where('important_link','important_link')
            ->get();

        $data['all_patient'] = AllPatient::get();
        $data['consu'] = Consultnt::OrderBy('id','desc')->take(8)->get();
        $data['news'] = NewsEvent::OrderBy('id','desc')->take(6)->get();
        $data['gallery'] = Gallery::OrderBy('id','desc')->take(6)->get();
        $data['supported'] = Supported::get();

        $data['all_consultnt'] = Consultnt::OrderBy('id','desc')->paginate(6);
        

    	return view('fontend/single_page/all_consultnt',$data);

    }

    public function AllPatient(){

        $data['socialIcon'] = SocialIcon::get();
    	$data['Service'] = Service::get();
    	$data['slide'] = Slider::get();
        $data['ProductCategory'] = ProductCategory::get();
        $data['simple_slider'] = SimpleSlider::get();
    	$data['contact'] = ContactUs::where('id','1')->first();
        $data['logo'] = Logo::where('id','1')->first();
    	$data['contact_two'] = ContactUsTwo::where('id','1')->first();
        $data['About'] = About::where('id','1')->first();
    	$data['object'] = Page::where('id','5')->first();
        // $object = Page::where('title_uri',$slug)->first();
        $data['counter'] = Counter::where('id','1')->first();

    	 $data['main'] = Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();

            $data['quick_link'] = Menu::orderBy('sequence','ASC')
            ->where('important_link','important_link')
            ->get();

        $data['all_patient'] = AllPatient::get();
        $data['consu'] = Consultnt::OrderBy('id','desc')->take(8)->get();
        $data['news'] = NewsEvent::OrderBy('id','desc')->take(6)->get();
        $data['gallery'] = Gallery::OrderBy('id','desc')->take(6)->get();
        $data['supported'] = Supported::get();

        $data['all_patients'] = AllPatient::OrderBy('id','desc')->paginate(6);
        

    	return view('fontend/single_page/all_patient',$data);

    }

    public function AllNews(){
    
        $data['socialIcon'] = SocialIcon::get();
    	$data['Service'] = Service::get();
    	$data['slide'] = Slider::get();
        $data['ProductCategory'] = ProductCategory::get();
        $data['simple_slider'] = SimpleSlider::get();
    	$data['contact'] = ContactUs::where('id','1')->first();
        $data['logo'] = Logo::where('id','1')->first();
    	$data['contact_two'] = ContactUsTwo::where('id','1')->first();
        $data['About'] = About::where('id','1')->first();
    	$data['object'] = Page::where('id','5')->first();
        // $object = Page::where('title_uri',$slug)->first();
        $data['counter'] = Counter::where('id','1')->first();

    	 $data['main'] = Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();

            $data['NewsPageSeo'] = BlogPageSeo::where('id','1')->first();

            $data['quick_link'] = Menu::orderBy('sequence','ASC')
            ->where('important_link','important_link')
            ->get();

        $data['all_patient'] = AllPatient::get();
        $data['consu'] = Consultnt::OrderBy('id','desc')->take(8)->get();
        $data['news'] = NewsEvent::OrderBy('id','desc')->take(6)->get();
        $data['gallery'] = Gallery::OrderBy('id','desc')->take(6)->get();
        $data['supported'] = Supported::get();

        $data['news'] = NewsEvent::OrderBy('id','desc')->paginate(6);
        

    	return view('fontend/single_page/all_news',$data);

    }

    public function SinglePatient($slug){
      
        $data['socialIcon'] = SocialIcon::get();
    	$data['Service'] = Service::get();
    	$data['slide'] = Slider::get();
        $data['ProductCategory'] = ProductCategory::get();
        $data['simple_slider'] = SimpleSlider::get();
    	$data['contact'] = ContactUs::where('id','1')->first();
        $data['logo'] = Logo::where('id','1')->first();
    	$data['contact_two'] = ContactUsTwo::where('id','1')->first();
        $data['About'] = About::where('id','1')->first();
    	$data['object'] = Page::where('id','5')->first();
        // $object = Page::where('title_uri',$slug)->first();
        $data['counter'] = Counter::where('id','1')->first();

    	 $data['main'] = Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();

            $data['quick_link'] = Menu::orderBy('sequence','ASC')
            ->where('important_link','important_link')
            ->get();

        $data['all_patient'] = AllPatient::get();
        $data['consu'] = Consultnt::OrderBy('id','desc')->take(8)->get();
        $data['news'] = NewsEvent::OrderBy('id','desc')->take(6)->get();
        $data['gallery'] = Gallery::OrderBy('id','desc')->take(6)->get();
        $data['supported'] = Supported::get();

        $data['patient_details'] = AllPatient::where('slug',$slug)->first();
        
        
        return view('fontend/single_page/patient_details',$data);

    }


    public function SingleNews($slug){

        $data['socialIcon'] = SocialIcon::get();
    	$data['Service'] = Service::get();
    	$data['slide'] = Slider::get();
        $data['ProductCategory'] = ProductCategory::get();
        $data['simple_slider'] = SimpleSlider::get();
    	$data['contact'] = ContactUs::where('id','1')->first();
        $data['logo'] = Logo::where('id','1')->first();
    	$data['contact_two'] = ContactUsTwo::where('id','1')->first();
        $data['About'] = About::where('id','1')->first();
    	$data['object'] = Page::where('id','5')->first();
        // $object = Page::where('title_uri',$slug)->first();
        $data['counter'] = Counter::where('id','1')->first();

    	 $data['main'] = Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();


            $data['quick_link'] = Menu::orderBy('sequence','ASC')
            ->where('important_link','important_link')
            ->get();

        $data['all_patient'] = AllPatient::get();
        $data['consu'] = Consultnt::OrderBy('id','desc')->take(8)->get();
        $data['news'] = NewsEvent::OrderBy('id','desc')->take(6)->get();
        $data['gallery'] = Gallery::OrderBy('id','desc')->take(6)->get();
        $data['supported'] = Supported::get();
        
        $data['single_news'] = NewsEvent::where('slug',$slug)->first();

        $data['popular_post'] = NewsEvent::OrderBy('id','desc')->take(4)->get();
        

    	return view('fontend/single_page/news_details',$data);


    }

    public function ServiceSingle($id){
    	$data['socialIcon'] = SocialIcon::get();
    	
    	$data['slider'] = Slider::get();
         $data['simple_slider'] = SimpleSlider::get();
    	$data['contact'] = ContactUs::where('id','1')->first();
    	$data['contact_two'] = ContactUsTwo::where('id','1')->first();
    	$data['object'] = Page::where('id','3')->first();
        $data['logo'] = Logo::where('id','1')->first();
         $data['service_details'] = Service::where('id',$id)->first();
         $data['main'] = Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();

            $data['quick_link'] = Menu::orderBy('sequence','ASC')
            ->where('important_link','important_link')
            ->get();
    	return view('fontend/single_page/service_details',$data);
    }

    public function AboutSingle($id){

        $data['socialIcon'] = SocialIcon::get();
    	$data['Service'] = Service::get();
    	$data['slide'] = Slider::get();
        $data['ProductCategory'] = ProductCategory::get();
        $data['simple_slider'] = SimpleSlider::get();
    	$data['contact'] = ContactUs::where('id','1')->first();
        $data['logo'] = Logo::where('id','1')->first();
    	$data['contact_two'] = ContactUsTwo::where('id','1')->first();
        $data['About'] = About::where('id','1')->first();
    	$data['object'] = Page::where('id','5')->first();
        // $object = Page::where('title_uri',$slug)->first();
        $data['counter'] = Counter::where('id','1')->first();

    	 $data['main'] = Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();

            $data['quick_link'] = Menu::orderBy('sequence','ASC')
            ->where('important_link','important_link')
            ->get();

        $data['all_patient'] = AllPatient::get();
        $data['consu'] = Consultnt::OrderBy('id','desc')->take(8)->get();
        $data['news'] = NewsEvent::OrderBy('id','desc')->take(6)->get();
        $data['gallery'] = Gallery::OrderBy('id','desc')->take(6)->get();
        $data['supported'] = Supported::get();

        $data['single_about'] = About::where('id',$id)->first();
    	return view('fontend/single_page/about',$data);
    }


    public function ContactUs(){

    	$data['socialIcon'] = SocialIcon::get();
    	$data['Service'] = Service::get();
    	$data['slider'] = Slider::get();
        $data['simple_slider'] = SimpleSlider::get();
    	$data['contact'] = ContactUs::where('id','1')->first();
    	$data['contact_two'] = ContactUsTwo::where('id','1')->first();
    	$data['object'] = Page::where('id','3')->first();
        $data['main'] = Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();
            
            $data['contact_seo'] = ContactPageSeo::where('id','1')->first();
            $data['quick_link'] = Menu::orderBy('sequence','ASC')
            ->where('important_link','important_link')
            ->get();
        
        $data['logo'] = Logo::where('id','1')->first();
    	return view('fontend/single_page/ContactUs',$data);
    }

    public function Gallery(){
      
      $data['socialIcon'] = SocialIcon::get();
        $data['Service'] = Service::get();
        $data['slider'] = Slider::get();
        $data['simple_slider'] = SimpleSlider::get();
        $data['gallery'] = Gallery::get();
        // $data['category'] = GalleryCategory::get();
        $data['contact'] = ContactUs::where('id','1')->first();
        $data['contact_two'] = ContactUsTwo::where('id','1')->first();
        $data['object'] = Page::where('id','3')->first();
        $data['main'] = Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();


            $data['quick_link'] = Menu::orderBy('sequence','ASC')
            ->where('important_link','important_link')
            ->get();

        $data['logo'] = Logo::where('id','1')->first();

        return view('fontend/single_page/gallery',$data);    

    }

    public function AboutDetails(){

         $data['socialIcon'] = SocialIcon::get();
        $data['Service'] = Service::get();
        $data['slider'] = Slider::get();
        $data['simple_slider'] = SimpleSlider::get();
        $data['category'] = GalleryCategory::get();
        // $data[''] = GalleryCategory::get();
        $data['contact'] = ContactUs::where('id','1')->first();
        $data['contact_two'] = ContactUsTwo::where('id','1')->first();
        $data['object'] = Page::where('id','3')->first();
        $data['main'] = Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();

            $data['quick_link'] = Menu::orderBy('sequence','ASC')
            ->where('important_link','important_link')
            ->get();
              $data['About'] = About::where('id','1')->first();

        $data['logo'] = Logo::where('id','1')->first();

        return view('fontend/single_page/about_details',$data);
    }

    public function ProductwiseCat($id){


         $data['socialIcon'] = SocialIcon::get();
        $data['Service'] = Service::get();
        $data['slider'] = Slider::get();
        $data['simple_slider'] = SimpleSlider::get();
        $data['category'] = GalleryCategory::get();
        // $data[''] = GalleryCategory::get();
        $data['contact'] = ContactUs::where('id','1')->first();
        $data['contact_two'] = ContactUsTwo::where('id','1')->first();
        $data['object'] = Page::where('id','3')->first();
        $data['main'] = Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();

            $data['quick_link'] = Menu::orderBy('sequence','ASC')
            ->where('important_link','important_link')
            ->get();
       $data['About'] = About::where('id','1')->first();

        $data['logo'] = Logo::where('id','1')->first();
        $data['catwise'] =Products::where('cat_id',$id)->take(8)->get(); 

        return view('fontend/single_page/cat_wise_product',$data);
    }  


      public function productall(){


         $data['socialIcon'] = SocialIcon::get();
        $data['Service'] = Service::get();
        $data['slider'] = Slider::get();
        $data['simple_slider'] = SimpleSlider::get();
        $data['category'] = GalleryCategory::get();
        // $data[''] = GalleryCategory::get();
        $data['contact'] = ContactUs::where('id','1')->first();
        $data['contact_two'] = ContactUsTwo::where('id','1')->first();
        $data['object'] = Page::where('id','3')->first();
        $data['main'] = Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();

            $data['quick_link'] = Menu::orderBy('sequence','ASC')
            ->where('important_link','important_link')
            ->get();
       $data['About'] = About::where('id','1')->first();

        $data['logo'] = Logo::where('id','1')->first();
        $data['product'] =Products::get(); 

        return view('fontend/single_page/product',$data);
    }


    public function Donation(){

        $data['socialIcon'] = SocialIcon::get();
        $data['Service'] = Service::get();
        $data['slider'] = Slider::get();
        $data['simple_slider'] = SimpleSlider::get();
        $data['category'] = GalleryCategory::get();
        // $data[''] = GalleryCategory::get();
        $data['contact'] = ContactUs::where('id','1')->first();
        $data['contact_two'] = ContactUsTwo::where('id','1')->first();
        $data['object'] = Page::where('id','3')->first();
        $data['main'] = Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();

            $data['quick_link'] = Menu::orderBy('sequence','ASC')
            ->where('important_link','important_link')
            ->get();
       $data['About'] = About::where('id','1')->first();

        $data['logo'] = Logo::where('id','1')->first();
        $data['product'] =Products::get();

        return view('fontend.single_page.donation',$data);


    }
}
