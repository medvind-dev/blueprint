   <?php

   use Diglactic\Breadcrumbs\Breadcrumbs;
   use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

   Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
       $trail->push(__('Home'), route('home'));
   });

   Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
       $trail->parent('home');
       $trail->push(__('Dashboard'), route('dashboard'));
   });
