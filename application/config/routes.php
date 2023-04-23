<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['login']= 'Auth/log';
$route['Page']= 'Page';
$route['Bureau']= 'Matrimony/Bureau';
$route['Viewgroom']= 'Matrimony/Viewgroom';
$route['Viewbride']= 'Matrimony/Viewbride';
$route['metroinfo/(:any)']= 'Matrimony/metroinfo/$1';
//matriomony start//
$route['Matrimony']= 'Matrimony';
$route['profileregister']= 'Matrimony/matrimonyform';
$route['dasbored']= 'Matrimony/dasbored';
$route['rg']= 'Matrimony/fristfrom';
$route['bruinfo/(:any)']= 'Matrimony/pesronlinfo/$1';
$route['emp']= 'Matrimony/educationinformation';
$route['empu/(:any)']= 'Matrimony/educationinformations/$1';
$route['logouts']= 'Matrimony/logout';
$route['list']= 'Matrimony/likedprofilelist';
// Community office start//

$route['chlogin']= 'CAuth/logs';
$route['CPage']= 'CPage';
$route['rcommunity']= 'Community/rcommunity';
$route['logout']= 'Hospic/logout';
// Hospic office start//
$route['Hospiceform']="Hospic/Hospiceform";
$route['hospicrg']="Hospic/addhospic";
$route['dashbored']="Hospic/dasbored";
$route['homform']="Hospic/addhospic";
$route['addmeber/(:any)']="Hospic/addmeber/$1";
$route['updatehospic/(:any)']="Hospic/updatehospic/$1";
$route['updatehosipcsf/(:any)']="Hospic/updatehospice/$1";
$route['adddonation/(:any)']="Hospic/adddonation/$1";
// state office start//
$route['sataoffice']="State/Stateforms";
$route['officeform']="State/addoffice";
$route['satemaber']="State/satemebersfrom";
$route['statemambers/(:any)']="State/formssatember/$1";
$route['viewmabers/(:any)']="State/viewmabers/$1";
$route['editoffic/(:any)']="State/stateoficeupdate/$1";
$route['updateofiiceinfo/(:any)']="State/updateofiiceinfo/$1";
// national ofiice start//
$route['nationaloffice']="Nationl/Nationlforms";
$route['nationalofficefrom']="Nationl/nationaladdoffice";
$route['nationalmaber']="Nationl/nationalmaber";
$route['nationalmambers/(:any)']="Nationl/nationalmambers/$1";
$route['nviewmabers/(:any)']="Nationl/nviewmabers/$1";
$route['nationaleditoffic/(:any)']="Nationl/nationaleditoffic/$1";
$route['nupdateofiiceinfo/(:any)']="Nationl/nupdateofiiceinfo/$1";
// news paper staert//
$route['newpaperoffice']="Newspaper/Newspaperforms";
$route['newspaerform']="Newspaper/addNewspaperoffice";
$route['newspaperoffice']="Newspaper/newspaperoffice";
$route['newspapermambers/(:any)']="Newspaper/newspapermambers/$1";
$route['newpapereditoffice/(:any)']="Newspaper/newpapereditoffice/$1";
$route['newupdateofiiceinfo/(:any)']="Newspaper/newupdateofiiceinfos/$1";
$route['newofficmamber/(:any)']="Newspaper/newofficmamber/$1";
$route['newspaper/(:any)']="Newspaper/newspaper/$1";
//Social groups//
$route['socialgroup']="Socialgroups/Socialgroupsforms";
$route['socialmember']="Socialgroups/Socialgroupsoffice";
$route['soicaladdmambers/(:any)']="Socialgroups/soicaladdmambers/$1";
$route['socialviewmamber/(:any)']="Socialgroups/socialviewmamber/$1";
$route['socialupdate/(:any)']="Socialgroups/socialupdate/$1";
//fornt vies//
$route['Hospice']= 'Matrimony/Hospice';
$route['HospiceDetail/(:any)']="Matrimony/HospiceDetail/$1";
//hospic end//
$route['Statelevel']= 'Matrimony/Statelevel';
$route['StatelevleDetail/(:any)']="Matrimony/StatelevleDetail/$1";
// state end//
$route['Nationallevel']= 'Matrimony/Nationallevel';
$route['NationalDetail/(:any)']="Matrimony/NationalDetail/$1";
//national end//
// socialfornt//
$route['social']= 'Matrimony/social';
$route['SocialDetail/(:any)']="Matrimony/SocialDetail/$1";
$route['News']= 'Matrimony/News';
$route['NewsDetail/(:any)']="Matrimony/NewsDetail/$1";
//addbusiness//
$route['addbusiness']= 'Matrimony/addbusiness';
$route['updatebusiness']= 'Matrimony/updatebusiness';
$route['profile/(:any)']="Matrimony/profile/$1";
// event//
$route['addevent']= 'Matrimony/addevent';
$route['eventlist']= 'Matrimony/eventlist';
$route['updatevent/(:any)']="Matrimony/updatevent/$1";
// Birthday//
$route['addbirthday']= 'Matrimony/dbirthday';
$route['birthdaylist']= 'Matrimony/birthdaylist';
$route['updatbirthday/(:any)']="Matrimony/updatbirthday/$1";
// condolence//
$route['addcondolence']= 'Matrimony/condolence';
$route['condolencelist']= 'Matrimony/condolencelist';
$route['updatcondolence/(:any)']="Matrimony/updatcondolence/$1";
// brithday//
$route['todaybrithday']= 'Matrimony/bde';
$route['todaycondolence']= 'Matrimony/dcondolence';
$route['directory']= 'Matrimony/directory';
$route['Event']= 'Matrimony/Event';
//blog//
$route['addblog']= 'Matrimony/blog';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
