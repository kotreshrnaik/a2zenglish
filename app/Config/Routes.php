<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$myroutes = [];
$myroutes ['about'] = 'Home::about';
$myroutes ['contact'] = 'Home::contact';

$myroutes ['/downloads/english-grammar'] = 'Downloads::EnglishGrammar';
$myroutes ['/downloads/spoken-english'] = 'Downloads::SpokenEnglish';
$myroutes ['/downloads/parts-of-speech'] = 'Downloads::PartsOfSpeech';
$myroutes ['/downloads/vocabulary'] = 'Downloads::Vocabulary';
$myroutes ['/downloads/translation'] = 'Downloads::Translation';
$myroutes ['/downloads/objective-english'] = 'Downloads::ObjectiveEnglish';
$myroutes ['/downloads/interview'] = 'Downloads::InterviewQandA';
$myroutes ['/downloads/essays'] = 'Downloads::Essays';

$myroutes ['/onlinecourses/spelling-and-basic-english-course'] = 'Onlinecourses::SpellingAndBasicEnglishCourse';
$myroutes ['/onlinecourses/english-grammar-course'] = 'Onlinecourses::EnglishGrammarCourse';
$myroutes ['/onlinecourses/spoken-english-course'] = 'Onlinecourses::SpokenEnglishCourse';
$myroutes ['/onlinecourses/translation-course'] = 'Onlinecourses::TranslationCourse';
$myroutes ['/onlinecourses/cursive-handwriting-course'] = 'Onlinecourses::CursiveHandwritingCourse';
$myroutes ['/onlinecourses/objective-english-course'] = 'Onlinecourses::ObjectiveEnglishCourse';
$myroutes ['/onlinecourses/jobs-skills-training-course'] = 'Onlinecourses::JobsSkillsTrainingCourse';
$myroutes ['/onlinecourses/essay-writing-course'] = 'Onlinecourses::EssayWritingCourse';
$myroutes ['/onlinecourses/build-your-vocabulary-course'] = 'Onlinecourses::BuildYourVocabularyCourse';
$myroutes ['/onlinecourses/precis-writing-course'] = 'Onlinecourses::PrecisWritingCourse';

$myroutes ['/blogs/english-grammar'] = 'Blogs::EnglishGrammar';
$myroutes ['/blogs/spoken-english'] = 'Blogs::SpokenEnglish';
$myroutes ['/blogs/parts-of-speech'] = 'Blogs::PartsOfSpeech';
$myroutes ['/blogs/vocabulary'] = 'Blogs::Vocabulary';
$myroutes ['/blogs/translation'] = 'Blogs::Translation';
$myroutes ['/blogs/objective-english'] = 'Blogs::ObjectiveEnglish';
$myroutes ['/blogs/interview'] = 'Blogs::InterviewQandA';
$myroutes ['/blogs/essays'] = 'Blogs::Essays';


$myroutes ['/more/english-charts'] = 'More::EnglishCharts';
$myroutes ['/more/students-doubts'] = 'More::StudentsDoubts';

$myroutes ['/socialmedia/youtube-channel'] = 'Socialmedia::Youtube';
$myroutes ['/socialmedia/facebookpage'] = 'Socialmedia::FacebookPage';
$myroutes ['/socialmedia/instagram'] = 'Socialmedia::Instagram';
$myroutes ['/socialmedia/spotify'] = 'Socialmedia::Spotify';

$myroutes ['/ebooks/'] = 'EBooks::';

$myroutes ['/services/'] = 'Services::';

$routes->map($myroutes);
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
