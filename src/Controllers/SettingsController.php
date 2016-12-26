<?php

namespace PMTest\Controllers;

use PMTest\Services\SettingsService;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;

class SettingsController extends Controller
{
    /**
     * @var SettingsService
     */
    private $settingsService;

    /**
     * SettingsController constructor.
     * @param SettingsService $settingsService
     */
    public function __construct(SettingsService $settingsService)
    {
        $this->settingsService = $settingsService;
    }

    /**
     * @param Request $request
     */
    public function saveSettings(Request $request)
    {
        $test = $request->get('test');
        $this->settingsService->setSettingsValue('yc_test', $test);
    }

    /**
     * @return bool|mixed
     */
    public function loadSettings()
    {
        echo $this->settingsService->getSettingsValue('yc_test');
    }
}