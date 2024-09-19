<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebd4bd005aa             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\104\157\155\x61\x69\x6e\40\115\141\156\141\147\145\x72", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\141\156\145\x6c")) { goto cwwmimggaaecmucw; } Panel::symcgieuakksimmu(); cwwmimggaaecmucw: if (!$this->omseesogaocascyo("\143\157\155\x70\157\156\145\156\x74\55\155\141\x6e\141\147\x65\162")) { goto awoaooyoeoyeeqee; } Model::symcgieuakksimmu(); awoaooyoeoyeeqee: } }
