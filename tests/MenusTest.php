<?php

namespace Tests;

class MenusTest extends TestCase
{
    /** @test */
    public function it_proposes_a_setup_if_the_workflow_is_not_yet_configured()
    {
        $this->deleteConfigFile();
        putenv('action=none');

        $output = $this->mockAlfredCallToScriptFilter();

        $this->assertStringContainsString('"arg":"setup"', $output);
    }

    /** @test */
    public function it_proposes_to_setup_toggl_and_harvest_if_setup_is_accepted_and_offers_a_go_back_option()
    {
        putenv('action=setup');

        $output = $this->mockAlfredCallToScriptFilter();

        $this->assertStringContainsString('"setup_toggl"', $output);
        $this->assertStringContainsString('"setup_harvest"', $output);
    }

    /** @test */
    public function it_proposes_to_enter_toggl_options_if_toggl_setup_is_chosen_and_offers_a_go_back_option()
    {
        putenv('action=setup_toggl');

        $output = $this->mockAlfredCallToScriptFilter();

        $this->assertStringContainsString('"setup_toggl_apikey"', $output);
        $this->assertStringContainsString('"setup_toggl_state"', $output);
        $this->assertStringContainsString('"setup"', $output);
    }

    /** @test */
    public function it_proposes_to_save_toggl_api_key_if_setup_toggl_apikey_is_chosen_and_offers_a_go_back_options()
    {
        putenv('action=setup_toggl_apikey');

        $output = $this->mockAlfredCallToScriptFilter();

        $this->assertStringContainsString('"setup_toggl_apikey_save"', $output);
        $this->assertStringContainsString('"setup_toggl"', $output);
    }
}
