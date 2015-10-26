# AIWidget-Dashboard
File name, location and function names are final so this can be rename and relocate if wanted. 
 
#Route File
app/Http/routes.php
- All route are listed in this file
 
# Name -> Ad Controller -> JS
app/Http/Controllers/AdController.php - output can be found in dashboard page. 
- Revenue Per Month    -> public function getStat($filter='monthly') {} -> public/global/js/demos/flot/line.js 
- Product Breakdown    -> public function breakDown($filter='') {} -> public/global/js/demos/flot/donut.js
- Top Performing Pages -> public function  topPerformingPages() {} -> public/js/top-performing-pages.js
- eCPM by Country      -> public function  effectiveCostPerMile($filter='') {} -> public/global/js/demos/flot/stacked-horizontal.js
- Pagination           -> public function  pagination() {}  
- Revenue today, revenue this month, total users and currently active uses ->  public function headerStatus() {} ->  public/js/dashboard.js 
 
#Name -> Api Android Controller  -> Link  
app/Http/Controllers/ApiAndroidController.php 
- Search android ap -> public function search($term) -> url: http://dev.dashboard.aiwidget.com/api/android/search/game
 
# Name -> Api iTune Controller  -> Link
app/Http/Controllers/ApiITuneController.php
- Search iTune app  -> public function search($term)  -> url: http://dev.dashboard.aiwidget.com/api/iTune/search/game  
 
# Name -> JS
- Start all the js here -> public/js/all.js                      
- Call the js with conditions -> public/js/all-init.js                
- Revenue Per Month -> public/global/js/demos/flot/line.js  
- Product Breakdown -> public/global/js/demos/flot/donut.js 
- Top Performing Pages  ->  public/js/top-performing-pages.js                  
- eCPM by Country -> public/global/js/demos/flot/stacked-horizontal.js 
- Revenue today, revenue this month, total users and currently active uses -> public/js/dashboard.js   

# Live Chat with Zendesk. 
- Located at resources/views/app.blade.php inside header tags

# Page Name -> File -> Controller 
 - Dashboard -> resources/views/pages/dashboard.blade.php ->  app/Http/Controllers/DashboardController.php
 - Ad-Slot -> resources/views/pages/slot.blade.php -> app/Http/Controllers/SlotController.php
 - Payment - resources/views/pages/payment.blade.php -> app/Http/Controllers/PaymentController.php
 - Documentation -> resources/views/pages/documentation.blade.php -> app/Http/Controllers/DocumentationController.php




