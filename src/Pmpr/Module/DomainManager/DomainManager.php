<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec6b5533a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x44\x6f\x6d\141\151\156\40\x4d\x61\156\141\147\145\162", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\x61\x6e\x65\x6c")) { goto iqcogmsguwoikame; } Panel::symcgieuakksimmu(); iqcogmsguwoikame: if (!$this->omseesogaocascyo("\x63\x6f\155\x70\x6f\x6e\145\156\x74\55\x6d\141\156\141\x67\145\x72")) { goto gimmuoqwckiseaik; } Model::symcgieuakksimmu(); gimmuoqwckiseaik: } }
