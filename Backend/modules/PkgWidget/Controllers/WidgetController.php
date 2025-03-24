<?php

namespace Modules\PkgWidget\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\PkgWidget\App\Services\WidgetService;
class WidgetController extends Controller
{
    protected $widgetService;

    public function __construct(WidgetService $widgetService)
    {
        $this->widgetService = $widgetService;
    }
    public function execute(Request $request)
    {
        $method = $request->input('method_name');
        
        try {
            if (!method_exists($this->widgetService, $method)) {
                throw new \Exception("La méthode demandée n'existe pas.");
            }
            
            // Exécuter la méthode dynamiquement
            $result = call_user_func([$this->widgetService, $method]);
            return redirect()->back()->with('result', $result);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
