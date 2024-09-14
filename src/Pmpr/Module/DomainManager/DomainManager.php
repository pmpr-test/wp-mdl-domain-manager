<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e7950b3e3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x44\x6f\155\x61\x69\x6e\x20\x4d\x61\156\x61\147\x65\x72", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\x61\x6e\145\154")) { goto iqcogmsguwoikame; } Panel::symcgieuakksimmu(); iqcogmsguwoikame: if (!$this->omseesogaocascyo("\x63\x6f\155\x70\157\x6e\145\x6e\x74\55\x6d\x61\156\141\147\x65\162")) { goto gimmuoqwckiseaik; } Model::symcgieuakksimmu(); gimmuoqwckiseaik: } }
