<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\Admin\\AdminApiController::index'], null, null, null, false, false, null]],
        '/admin/calendar' => [[['_route' => 'admin_calendar_index', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/calendar/new' => [[['_route' => 'admin_calendar_new', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/calendarmain' => [[['_route' => 'admin_main_calendar', '_controller' => 'App\\Controller\\Admin\\AdminCalendarMainController::index'], null, null, null, false, false, null]],
        '/admin/purchase/customer' => [[['_route' => 'admin_purchase_customer', '_controller' => 'App\\Controller\\Admin\\AdminPurchaseCustomerController::index'], null, null, null, true, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Admin\\AdminUserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category' => [[['_route' => 'admin_category_index', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'admin_category_new', '_controller' => 'App\\Controller\\Admin\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/customer' => [[['_route' => 'admin_customer_index', '_controller' => 'App\\Controller\\Admin\\CustomerController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/customer/new' => [[['_route' => 'admin_customer_new', '_controller' => 'App\\Controller\\Admin\\CustomerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendar' => [[['_route' => 'app_calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, null, null, false, false, null]],
        '/calendarallchar' => [[['_route' => 'calendar_all_char', '_controller' => 'App\\Controller\\CalendarController::listCalendarByChar'], null, null, null, false, false, null]],
        '/calendarscatamaran' => [[['_route' => 'cataAll_show', '_controller' => 'App\\Controller\\CalendarController::listCalendarByCatamaran'], null, null, null, false, false, null]],
        '/calendarcharkid' => [[['_route' => 'charkidAll_show', '_controller' => 'App\\Controller\\CalendarController::listCalendarByCharKid'], null, null, null, false, false, null]],
        '/calendarmaincata' => [[['_route' => 'app_calendar_main_cata', '_controller' => 'App\\Controller\\CalendarMainCataController::listCalendarByChar'], null, null, null, false, false, null]],
        '/calendarmainchar' => [[['_route' => 'app_calendar_main_char', '_controller' => 'App\\Controller\\CalendarMainCharController::listCalendarByChar'], null, null, null, false, false, null]],
        '/calendarmain' => [[['_route' => 'app_calendar_main', '_controller' => 'App\\Controller\\CalendarMainController::index'], null, null, null, false, false, null]],
        '/calendarmainkid' => [[['_route' => 'app_calendar_main_kid', '_controller' => 'App\\Controller\\CalendarMainKidController::listCalendarByChar'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/deleteAll' => [[['_route' => 'cart_delete_all', '_controller' => 'App\\Controller\\CartController::deleteAll'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/presentation' => [[['_route' => 'app_presentation', '_controller' => 'App\\Controller\\HomeController::presentation'], null, null, null, false, false, null]],
        '/purchase/confirm' => [[['_route' => 'app_purchase_confirm', '_controller' => 'App\\Controller\\Purchase\\PurchaseConfirmationController::confirm'], null, null, null, false, false, null]],
        '/purchase' => [[['_route' => 'app_purchase', '_controller' => 'App\\Controller\\Purchase\\PurchaseListController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/forgot-mdp' => [[['_route' => 'forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
        '/testmenu' => [[['_route' => 'app_testmenu', '_controller' => 'App\\Controller\\TestmenuController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|api/([^/]++)/edit(*:34)'
                    .'|c(?'
                        .'|a(?'
                            .'|lendar(?'
                                .'|/([^/]++)(?'
                                    .'|(*:70)'
                                    .'|/edit(*:82)'
                                    .'|(*:89)'
                                .')'
                                .'|showuser/([^/]++)(*:114)'
                            .')'
                            .'|tegory/([^/]++)(?'
                                .'|(*:141)'
                                .'|/edit(*:154)'
                                .'|(*:162)'
                            .')'
                        .')'
                        .'|ustomer/([^/]++)(*:188)'
                    .')'
                    .'|user/([^/]++)(*:210)'
                .')'
                .'|/search(?'
                    .'|(?:/([^/]++))?(*:243)'
                    .'|name(?:/([^/]++))?(*:269)'
                    .'|customer(?:/([^/]++))?(*:299)'
                .')'
                .'|/ca(?'
                    .'|rt/(?'
                        .'|add/(\\d+)(*:329)'
                        .'|de(?'
                            .'|lete/(\\d+)(*:352)'
                            .'|crement/(\\d+)(*:373)'
                        .')'
                    .')'
                    .'|lendar/([^/]++)(*:398)'
                .')'
                .'|/purchase/(?'
                    .'|pay/([0-9]+)(*:432)'
                    .'|terminate/([0-9]+)(*:458)'
                .')'
                .'|/forgot\\-mdp/([^/]++)(*:488)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:527)'
                    .'|wdt/([^/]++)(*:547)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:593)'
                            .'|router(*:607)'
                            .'|exception(?'
                                .'|(*:627)'
                                .'|\\.css(*:640)'
                            .')'
                        .')'
                        .'|(*:650)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\Admin\\AdminApiController::majEvent'], ['id'], ['PUT' => 0], null, false, false, null]],
        70 => [[['_route' => 'admin_calendar_show', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        82 => [[['_route' => 'admin_calendar_edit', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        89 => [[['_route' => 'admin_calendar_delete', '_controller' => 'App\\Controller\\Admin\\AdminCalendarController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        114 => [[['_route' => 'admin_calendar_show_user', '_controller' => 'App\\Controller\\Admin\\AdminCalendarShowUserController::showuser'], ['id'], ['GET' => 0], null, false, true, null]],
        141 => [[['_route' => 'admin_category_show', '_controller' => 'App\\Controller\\Admin\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        154 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        162 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        188 => [[['_route' => 'admin_customer_show', '_controller' => 'App\\Controller\\Admin\\CustomerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        210 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        243 => [[['_route' => 'user_search', 'searchItem' => null, '_controller' => 'App\\Controller\\Admin\\AdminUserController::searchUser'], ['searchItem'], null, null, false, true, null]],
        269 => [[['_route' => 'user_searchname', 'searchItemName' => null, '_controller' => 'App\\Controller\\Admin\\AdminUserController::searchUserName'], ['searchItemName'], null, null, false, true, null]],
        299 => [[['_route' => 'customer_search', 'searchItem' => null, '_controller' => 'App\\Controller\\Admin\\CustomerController::searchCustomer'], ['searchItem'], null, null, false, true, null]],
        329 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        352 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        373 => [[['_route' => 'cart_decrement', '_controller' => 'App\\Controller\\CartController::decrement'], ['id'], null, null, false, true, null]],
        398 => [[['_route' => 'app_calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        432 => [[['_route' => 'purchase_payment_form', '_controller' => 'App\\Controller\\Purchase\\PurchasePaymentController::showCardForm'], ['id'], null, null, false, true, null]],
        458 => [[['_route' => 'purchase_payment_success', '_controller' => 'App\\Controller\\Purchase\\PurchasePaymentSuccessController::success'], ['id'], null, null, false, true, null]],
        488 => [[['_route' => 'reset_pass', '_controller' => 'App\\Controller\\SecurityController::resetPass'], ['token'], null, null, false, true, null]],
        527 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        547 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        593 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        607 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        627 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        640 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        650 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
