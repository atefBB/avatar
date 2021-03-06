<?php

namespace Orchestra\Avatar\TestCase\Feature;

class AvatarServiceProviderTest extends TestCase
{
    /** @test */
    public function it_registers_expected_services()
    {
        $this->assertInstanceOf('\Orchestra\Avatar\AvatarManager', $this->app['orchestra.avatar']);
        $this->assertSame('gravatar', $this->app['config']->get('orchestra.avatar.driver'));
        $this->assertContains('\Orchestra\Avatar\AvatarServiceProvider', $this->app->getLoadedProviders());
    }
}
