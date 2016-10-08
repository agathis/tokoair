<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//route's route
Route::group(['prefix' => 'route'], function () {
    //get route's route
    Route::get('/', ['uses' => 'Route\routeController@getIndex', 'as' => 'route']);

    //get route's create
    Route::get('create', ['uses' => 'Route\routeController@getCreate', 'as' => 'route.create']);

    //post route's create
    Route::post('create', ['uses' => 'Route\routeController@postCreate', 'as' => 'route.create']);

    //get route's update
    Route::get('update/{id}', ['uses' => 'Route\routeController@getUpdate', 'as' => 'route.update']);

    //put route's route
    Route::put('update/{id}', ['uses' => 'Route\routeController@postUpdate', 'as' => 'route.update']);

    //delete route's route
    Route::get('delete/{id}', ['uses' => 'Route\routeController@getDelete', 'as' => 'route.delete']);


});

//cruise's route
Route::group(['prefix' => 'cruise'], function() {

    //get cruise's route
    Route::get('/', ['uses' => 'Cruise\cruiseController@getIndex', 'as' => 'cruise']);

    //get cruise's route
    Route::get('create', ['uses' => 'Cruise\cruiseController@getCreate', 'as' => 'cruise.create']);

    //post cruise's route
    Route::post('create', ['uses' => 'Cruise\cruiseController@postCreate', 'as' => 'cruise.create']);

    //get cruise's route
    Route::get('update/{id}', ['uses' => 'Cruise\cruiseController@getUpdate', 'as' => 'cruise.update']);

    //put cruise's route
    Route::put('update/{id}', ['uses' => 'Cruise\cruiseController@postUpdate', 'as' => 'cruise.update']);

    //delete cruise's route
    Route::get('delete/{id}', ['uses' => 'Cruise\cruiseController@getDelete', 'as' => 'cruise.delete']);

});

//user's route
Route::group(['prefix' => 'user'], function() {

    //get user's route
    Route::get('/', ['uses' => 'User\userController@getIndex', 'as' => 'user']);

    //get user's route
    Route::get('create', ['uses' => 'User\userController@getCreate', 'as' => 'user.create']);

    //post user's route
    Route::post('create', ['uses' => 'User\userController@postCreate', 'as' => 'user.create']);

    //get user's route
    Route::get('update/{id}', ['uses' => 'User\userController@getUpdate', 'as' => 'user.update']);

    //put user's route
    Route::put('update/{id}', ['uses' => 'User\userController@postUpdate', 'as' => 'user.update']);

    //delete user's route
    Route::get('delete/{id}', ['uses' => 'User\userController@getDelete', 'as' => 'user.delete']);

});

//ingredient's route
Route::group(['prefix' => 'ingredient'], function() {

    //get ingredient's route
    Route::get('/', ['uses' => 'Ingredient\ingredientController@getIndex', 'as' => 'ingredient']);

    //get ingredient's route
    Route::get('create', ['uses' => 'Ingredient\ingredientController@getCreate', 'as' => 'ingredient.create']);

    //post ingredient's route
    Route::post('create', ['uses' => 'Ingredient\ingredientController@postCreate', 'as' => 'ingredient.create']);

    //get ingredient's route
    Route::get('update/{id}', ['uses' => 'Ingredient\ingredientController@getUpdate', 'as' => 'ingredient.update']);

    //put ingredient's route
    Route::put('update/{id}', ['uses' => 'Ingredient\ingredientController@postUpdate', 'as' => 'ingredient.update']);

    //delete ingredient's route
    Route::get('delete/{id}', ['uses' => 'Ingredient\ingredientController@getDelete', 'as' => 'ingredient.delete']);

});

//recipe's route
Route::group(['prefix' => 'recipe'], function() {

    //get recipe's route
    Route::get('/', ['uses' => 'Recipe\recipeController@getIndex', 'as' => 'recipe']);

    //get recipe's route
    Route::get('create', ['uses' => 'Recipe\recipeController@getCreate', 'as' => 'recipe.create']);

    //post recipe's route
    Route::post('create', ['uses' => 'Recipe\recipeController@postCreate', 'as' => 'recipe.create']);

    //get recipe's route
    Route::get('update/{id}', ['uses' => 'Recipe\recipeController@getUpdate', 'as' => 'recipe.update']);

    //put recipe's route
    Route::put('update/{id}', ['uses' => 'Recipe\recipeController@postUpdate', 'as' => 'recipe.update']);

    //delete recipe's route
    Route::get('delete/{id}', ['uses' => 'Recipe\recipeController@getDelete', 'as' => 'recipe.delete']);

});

//menu's route
Route::group(['prefix' => 'menu'], function() {

    //get menu's route
    Route::get('/', ['uses' => 'Menu\menuController@getIndex', 'as' => 'menu']);

    //get menu's route
    Route::get('create', ['uses' => 'Menu\menuController@getCreate', 'as' => 'menu.create']);

    //post menu's route
    Route::post('create', ['uses' => 'Menu\menuController@postCreate', 'as' => 'menu.create']);

    //get menu's route
    Route::get('update/{id}', ['uses' => 'Menu\menuController@getUpdate', 'as' => 'menu.update']);

    //put menu's route
    Route::put('update/{id}', ['uses' => 'Menu\menuController@postUpdate', 'as' => 'menu.update']);

    //delete menu's route
    Route::get('delete/{id}', ['uses' => 'Menu\menuController@getDelete', 'as' => 'menu.delete']);

});

//vendor's route
Route::group(['prefix' => 'vendor'], function() {

    //get vendor's route
    Route::get('/', ['uses' => 'Vendor\vendorController@getIndex', 'as' => 'vendor']);

    //get vendor's route
    Route::get('create', ['uses' => 'Vendor\vendorController@getCreate', 'as' => 'vendor.create']);

    //post vendor's route
    Route::post('create', ['uses' => 'Vendor\vendorController@postCreate', 'as' => 'vendor.create']);

    //get vendor's route
    Route::get('update/{id}', ['uses' => 'Vendor\vendorController@getUpdate', 'as' => 'vendor.update']);

    //put vendor's route
    Route::put('update/{id}', ['uses' => 'Vendor\vendorController@postUpdate', 'as' => 'vendor.update']);

    //delete vendor's route
    Route::get('delete/{id}', ['uses' => 'Vendor\vendorController@getDelete', 'as' => 'vendor.delete']);

});

//voyage class's route
Route::group(['prefix' => 'voyage-class'], function() {

    //get voyage class's route
    Route::get('/', ['uses' => 'VoyageClass\voyageClassController@getIndex', 'as' => 'voyage-class']);

    //get voyage class's route
    Route::get('create', ['uses' => 'VoyageClass\voyageClassController@getCreate', 'as' => 'voyage-class.create']);

    //post voyage class's route
    Route::post('create', ['uses' => 'VoyageClass\voyageClassController@postCreate', 'as' => 'voyage-class.create']);

    //get voyage class's route
    Route::get('update/{id}', ['uses' => 'VoyageClass\voyageClassController@getUpdate', 'as' => 'voyage-class.update']);

    //put voyage class's route
    Route::put('update/{id}', ['uses' => 'VoyageClass\voyageClassController@postUpdate', 'as' => 'voyage-class.update']);

    //delete voyage class's route
    Route::get('delete/{id}', ['uses' => 'VoyageClass\voyageClassController@getDelete', 'as' => 'voyage-class.delete']);

});

//voyage planning's route
Route::group(['prefix' => 'voyage-planning'], function() {

    //get voyage planning's route
    Route::get('/', ['uses' => 'VoyagePlanning\voyagePlanningController@getIndex', 'as' => 'voyage-planning']);

    //get voyage planning's route
    Route::get('create', ['uses' => 'VoyagePlanning\voyagePlanningController@getCreate', 'as' => 'voyage-planning.create']);

    //post voyage planning's route
    Route::post('create', ['uses' => 'VoyagePlanning\voyagePlanningController@postCreate', 'as' => 'voyage-planning.create']);

    //get voyage planning's route
    Route::get('update/{id}', ['uses' => 'VoyagePlanning\voyagePlanningController@getUpdate', 'as' => 'voyage-planning.update']);

    //put voyage planning's route
    Route::put('update/{id}', ['uses' => 'VoyagePlanning\voyagePlanningController@postUpdate', 'as' => 'voyage-planning.update']);

    //delete voyage planning's route
    Route::get('delete/{id}', ['uses' => 'VoyagePlanning\voyagePlanningController@getDelete', 'as' => 'voyage-planning.delete']);

});

//meal planning's route
Route::group(['prefix' => 'meal-planning'], function() {

    //get meal planning's route
    Route::get('/', ['uses' => 'MealPlanning\mealPlanningController@getIndex', 'as' => 'meal-planning']);

    //get meal planning's route
    Route::get('create', ['uses' => 'MealPlanning\mealPlanningController@getCreate', 'as' => 'meal-planning.create']);

    //post meal planning's route
    Route::post('create', ['uses' => 'MealPlanning\mealPlanningController@postCreate', 'as' => 'meal-planning.create']);

    //get meal planning's route
    Route::get('update/{id}', ['uses' => 'MealPlanning\mealPlanningController@getUpdate', 'as' => 'meal-planning.update']);

    //put meal planning's route
    Route::put('update/{id}', ['uses' => 'MealPlanning\mealPlanningController@postUpdate', 'as' => 'meal-planning.update']);

    //delete meal planning's route
    Route::get('delete/{id}', ['uses' => 'MealPlanning\mealPlanningController@getDelete', 'as' => 'meal-planning.delete']);

});

//requisition's route
Route::group(['prefix' => 'requisition'], function() {

    //get requisition's route
    Route::get('/', ['uses' => 'Requisition\RequisitionController@getIndex', 'as' => 'requisition']);

    //get requisitionm's route
    Route::get('create', ['uses' => 'Requisition\RequisitionController@getCreate', 'as' => 'requisition.create']);

    //post requisition's route
    Route::post('create', ['uses' => 'Requisition\RequisitionController@postCreate', 'as' => 'requisition.create']);

    //get requisition's route
    Route::get('update/{id}', ['uses' => 'Requisition\RequisitionController@getUpdate', 'as' => 'requisition.update']);

    //put requisition's route
    Route::put('update/{id}', ['uses' => 'Requisition\RequisitionController@postUpdate', 'as' => 'requisition.update']);

    //delete requisition's route
    Route::get('delete/{id}', ['uses' => 'Requisition\RequisitionController@getDelete', 'as' => 'requisition.delete']);

    //status of requisition's route
    Route::get('status/{id}/{status}', ['uses' => 'Requisition\RequisitionController@getStatus', 'as' => 'requisition.status']);

});

//requisition item's route
Route::group(['prefix' => 'requisition-item'], function() {

    //get requisition item's route
    Route::get('/', ['uses' => 'RequisitionItem\RequisitionItemController@getIndex', 'as' => 'requisition-item']);

    //get requisition item's route
    Route::get('create', ['uses' => 'RequisitionItem\RequisitionItemController@getCreate', 'as' => 'requisition-item.create']);

    //post requisition item's route
    Route::post('create', ['uses' => 'RequisitionItem\RequisitionItemController@postCreate', 'as' => 'requisition-item.create']);

    //get requisition item's route
    Route::get('update/{id}', ['uses' => 'RequisitionItem\RequisitionItemController@getUpdate', 'as' => 'requisition-item.update']);

    //put requisition item's route
    Route::put('update/{id}', ['uses' => 'RequisitionItem\RequisitionItemController@postUpdate', 'as' => 'requisition-item.update']);

    //delete requisition item's route
    Route::get('delete/{id}', ['uses' => 'RequisitionItem\RequisitionItemController@getDelete', 'as' => 'requisition-item.delete']);

});