<?php

/**
 * This file was created by the developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on kontakt@bitbag.pl.
 */

namespace Tests\BitBag\CmsPlugin\Behat\Page\Admin\Page;

use Sylius\Behat\Page\Admin\Crud\CreatePage as BaseCreatePage;
use Tests\BitBag\CmsPlugin\Behat\Behaviour\ContainsError;
use Tests\BitBag\CmsPlugin\Behat\Behaviour\GenericPage;

/**
 * @author Mikołaj Król <mikolaj.krol@bitbag.pl>
 */
final class CreatePage extends BaseCreatePage implements CreatePageInterface
{
    use ContainsError;
    use GenericPage;

    /**
     * {@inheritDoc}
     */
    public function fillCode($code)
    {
        $this->getDocument()->fillField('Code', $code);
    }
}