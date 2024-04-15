<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Image;

class HomeController extends Controller
{
    public function index(){
        $services = Service::orderBy('created_at','desc')->get();

        $title = "Фирма за професионално почистване Сандански цени - WetCleans";

        $meta_description = 'Професионално почистване в град Сандански. Ние сме доказани експерите в почистването на различни обекти или превозни средства. Почистваща фирма в Сандански!';

        $keywords = 'Почистване Сандански, Професионално почистване сандански, фирма за почистване сандански';

        return view('web.index', ['services' => $services, 'title' => $title, 'meta_description' => $meta_description, 'keywords' => $keywords]);
    }

    public function services(){
        $services = Service::orderBy('created_at','desc')->paginate(10);

        $title = "Фирма за професионално почистване Сандански цени - WetCleans";

        $meta_description = 'Вземи оферта от WetCleans за почистване! За да получите оферта, моля свържете се с нас! Град Сандански.';

        $keywords = 'услуги за почистване Сандански';

        return view('web.services', ['services' => $services, 'title' => $title, 'meta_description' => $meta_description, 'keywords' => $keywords]);
    } 

    public function contacts(){
        $title = "Контакти - WetCleans";

        $services = Service::orderBy('created_at','desc')->get();

        $meta_description = 'Запазете час за почистване в удобно за вас време! Нашият екип е на разположение при всякакви въпроси!';

        $keywords = 'запази час за почистване сандански';

        return view('web.contact', ['title' => $title, 'services' => $services, 'meta_description' => $meta_description, 'keywords' => $keywords]);
    } 

    public function aboutUs(){
        $title = "За нас - WetCleans";

        $meta_description = 'Каква е нашата цел и с какво можем да сме полезни. Професионално почистване от WetCleans!';

        $keywords = 'за нас';

        return view('web.about-us', ['title' => $title, 'meta_description' => $meta_description, 'keywords' => $keywords]);
    } 
    public function gallery(){
        $title = "Галерия - WetCleans";

        $meta_description = 'Част от нашето портфолио. Снимки от преди и след почистване.';

        $keywords = '';

        $images = Image::orderBy('created_at', 'asc')->get();

        return view('web.gallery', ['title' => $title, 'images' => $images, 'meta_description' => $meta_description, 'keywords' => $keywords]);
    } 

    public function divani(){
        $title = "Почистване и Пране на Диван | Сандански | Цени - WetCleans";

        $meta_description = 'Професионално пране на дивани в Сандански с безупречно качество и внимание към детайла. Използваме еко продукти и модерни техники за освежаване на вашите дивани, връщайки им оригиналния вид и свежест.';

        $keywords = 'пране на дивани, почистване на дивани';

        return view('web.services.divani', ['title' => $title, 'meta_description' => $meta_description, 'keywords' => $keywords]);
    } 

    public function matraci(){
        $title = "Дълбоко Почистване и Пране на Матрак | Сандански - WetCleans";

        $meta_description = 'Открийте професионално пране на матраци в Сандански, което гарантира дълбоко почистване и премахване на алергени. Нашите експерти използват най-новите технологии и безвредни препарати, за да осигурят Вашето здравословно сънно пространство.';

        $keywords = 'пране на матраци, почистване на матраци';

        return view('web.services.matraci', ['title' => $title, 'meta_description' => $meta_description, 'keywords' => $keywords]);
    } 

    public function stolove(){
        $title = "Пране и Почистване на Столове | Цена | Сандански - WetCleans";

        $meta_description = 'Преобразете своите столове с нашите експертни услуги за пране в Сандански! Ние предлагаме дълбоко и нежно почистване, което връща блясъка и чистотата на всички видове столове.';

        $keywords = 'пране на столове, почистване на столове';

        return view('web.services.stolove', ['title' => $title, 'meta_description' => $meta_description, 'keywords' => $keywords]);
    } 

    public function prozorci(){
        $title = "Почистване на Прозорци | Цена | Сандански - WetCleans";

        $meta_description = 'Пране на прозорци в Сандански! Нашите професионалисти гарантират блясък и прозрачност, използвайки най-съвременни методи и еко продукти, които защитават както вашите прозорци, така и околната среда.';

        $keywords = 'почистване на прозорци';

        return view('web.services.prozorci', ['title' => $title, 'meta_description' => $meta_description, 'keywords' => $keywords]);
    } 

    public function kilimi(){
        $title = "Пране и Почистване Килими и Мокети Сандански - WetCleans";

        $meta_description = 'Пране на килими в Сандански! Ние предлагаме дълбоко почистване, което не само премахва всички петна и миризми, но и поддържа килимите ви здрави и красиви за по-дълго.';

        $keywords = 'почистване на килими, пране на килими';

        return view('web.services.kilimi', ['title' => $title, 'meta_description' => $meta_description, 'keywords' => $keywords]);
    }

    public function avtosaloni(){
        $title = "Пране и Почистване на Автосалони Сандански - WetCleans";

        $meta_description = 'Почистване на автосалони в Сандански! Ние предлагаме изключително детайлно почистване, което възстановява новия вид и усещане на автомобилния ви интериор, като същевременно елиминира всички миризми, петна и замърсявания.';

        $keywords = 'почистване на автосалони, пране на автосалони';

        return view('web.services.avtosaloni', ['title' => $title, 'meta_description' => $meta_description, 'keywords' => $keywords]);
    }
}
