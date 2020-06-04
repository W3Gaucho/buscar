<?php
$arr=[
    'acronimos'=>'https://www.acronymfinder.com/~/search/af.aspx?string=exact&Acronym=%s',
    'addons mozilla'=>'https://addons.mozilla.org/en-US/firefox/search/?q=%s&sort=users&type=extension',
    'alexa'=>'https://alexa.com/siteinfo/%s',
    'atom'=>'https://atom.io/packages/search?q=%s',
    'b-ok (books)'=>'https://b-ok.lat/s/?q=%s',
    'bing'=>'https://www.bing.com/search?q=%s',
    'bing translator'=>'https://www.bing.com/translator/?text=%s&from=auto&to=pt',
    'bing videos'=>'https://www.bing.com/videos/search?&q=%s&qft=+filterui:msite-youtube.com&FORM=VRFLTR',
    'buscape'=>'https://www.buscape.com.br/search?page=1&invalidPath=false&sortBy=prod_items_sort_by_price_asc&q=%s&no-shortcut=1',
    'duck.com'=>'https://duckduckgo.com/?kl=br-pt&q=%s&ia=web',
    'dicio.com.br'=>'https://www.dicio.com.br/pesquisa.php?q=%s',
    'discogs'=>'https://www.discogs.com/search/?q=%s&type=all',
    'emojipedia'=>'https://emojipedia.org/search/?q=%s',
    'google'=>'https://www.google.com.br/search?q=%s',
    'google maps'=>'https://www.google.com.br/maps?hl=pt&q=%s',
    'google news'=>'https://www.google.com.br/search?tbm=nws&q=%s',
    'linux mint (software)'=>'https://community.linuxmint.com/software/view/%s',
    'mercado livre'=>'https://lista.mercadolivre.com.br/%s',
    'packagist'=>'https://packagist.org/?query=%s',
    'stackoverflow'=>'https://stackoverflow.com/search?q=%s',
    'the pirate bay'=>'https://thepiratebay.org/search.php?q=%s&cat=0',
    'twitter'=>'https://twitter.com/search?f=tweets&vertical=default&q=%s filter:verified&src=typd&lang=pt&f=live'
];
ksort($arr);
return $arr;
