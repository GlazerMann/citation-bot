<?php
declare(strict_types=1);

const COMMON_MISTAKES = array ( // Common mistakes that aren't picked up by the levenshtein approach
  "ASIN"            =>  "asin",
  "EISSN"           =>  "eissn",
  "HDL"             =>  "hdl",
  "ISBN13"          =>  "isbn",
  "isbn13"          =>  "isbn",
  "ISMN"            =>  "ismn",
  "ISSN"            =>  "issn",
  "JFM"             =>  "jfm",
  "JSTOR"           =>  "jstor",
  "LCCN"            =>  "lccn",
  "MR"              =>  "mr",
  "OCLC"            =>  "oclc",
  "OL"              =>  "ol",
  "OSTI"            =>  "osti",
  "PMC"             =>  "pmc",
  "PMID"            =>  "pmid",
  "RFC"             =>  "rfc",
  "S2CID"           =>  "s2cid",
  "SBN"             =>  "sbn",
  "SSRN"            =>  "ssrn",
  "ZBL"             =>  "zbl",
  "embargo"         =>  "pmc-embargo-date",
  "albumlink"       =>  "title-link",
  "titlelink"       =>  "title-link",
  "artist"          =>  "others",
  "bioRxiv"         =>  "biorxiv",
  "coauthor"        =>  "coauthors",
  "co-author"       =>  "coauthors",
  "co-authors"      =>  "coauthors",
  "dio"             =>  "doi",
  "director"        =>  "others",
  "editors"         =>  "editor",
  "display_authors" =>  "display-authors",
  "displayauthors"  =>  "display-authors",
  "displayeditors"  =>  "display-editors",
  "doi_brokendate"  =>  "doi-broken-date",
  "doi_inactivedate"=>  "doi-broken-date",
  "doi-inactive-date" =>  "doi-broken-date",
  "doi-broken"      =>  "doi-broken-date",
  "subjectlink"     =>  "subject-link",
  "transcripturl"   =>  "transcript-url",
  "ed"              =>  "editor",
  "ed2"             =>  "editor2",
  "ed3"             =>  "editor3",
  "ed4"             =>  "editor4",
  "ed5"             =>  "editor5",
  "ed6"             =>  "editor6",
  "ed7"             =>  "editor7",
  "ed8"             =>  "editor8",
  "ed9"             =>  "editor9",
  "ed10"            =>  "editor10",
  "editorlink"      =>  "editor-link",
  "editorlink1"     =>  "editor1-link",
  "editorlink2"     =>  "editor2-link",
  "editorlink3"     =>  "editor3-link",
  "editorlink4"     =>  "editor4-link",
  "editorlink5"     =>  "editor5-link",
  "editorlink6"     =>  "editor6-link",
  "editorlink7"     =>  "editor7-link",
  "editorlink8"     =>  "editor8-link",
  "editorlink9"     =>  "editor9-link",
  "editorlink10"    =>  "editor10-link",
  "editorlink11"    =>  "editor11-link",
  "editorlink12"    =>  "editor12-link",
  "editorlink13"    =>  "editor13-link",
  "editorlink14"    =>  "editor14-link",
  "editorlink15"    =>  "editor15-link",
  "editorlink16"    =>  "editor16-link",
  "editorlink17"    =>  "editor17-link",
  "editorlink18"    =>  "editor18-link",
  "editorlink19"    =>  "editor19-link",
  "editorlink20"    =>  "editor20-link",
  "editorlink21"    =>  "editor21-link",
  "editorlink22"    =>  "editor22-link",
  "editorlink23"    =>  "editor23-link",
  "editorlink24"    =>  "editor24-link",
  "editorlink25"    =>  "editor25-link",
  "editorlink26"    =>  "editor26-link",
  "editorlink27"    =>  "editor27-link",
  "editorlink28"    =>  "editor28-link",
  "editorlink29"    =>  "editor29-link",
  "editorlink30"    =>  "editor30-link",
  "editor1link"     =>  "editor1-link",
  "editor2link"     =>  "editor2-link",
  "editor3link"     =>  "editor3-link",
  "editor4link"     =>  "editor4-link",
  "editor5link"     =>  "editor5-link",
  "editor6link"     =>  "editor6-link",
  "editor7link"     =>  "editor7-link",
  "editor8link"     =>  "editor8-link",
  "editor9link"     =>  "editor9-link",
  "editor10link"    =>  "editor10-link",
  "editor11link"    =>  "editor11-link",
  "editor12link"    =>  "editor12-link",
  "editor13link"    =>  "editor13-link",
  "editor14link"    =>  "editor14-link",
  "editor15link"    =>  "editor15-link",
  "editor16link"    =>  "editor16-link",
  "editor17link"    =>  "editor17-link",
  "editor18link"    =>  "editor18-link",
  "editor19link"    =>  "editor19-link",
  "editor20link"    =>  "editor20-link",
  "editor21link"    =>  "editor21-link",
  "editor22link"    =>  "editor22-link",
  "editor23link"    =>  "editor23-link",
  "editor24link"    =>  "editor24-link",
  "editor25link"    =>  "editor25-link",
  "editor26link"    =>  "editor26-link",
  "editor27link"    =>  "editor27-link",
  "editor28link"    =>  "editor28-link",
  "editor29link"    =>  "editor29-link",
  "editor30link"    =>  "editor30-link",
  "editorn"         =>  "editor2",
  "editorn-link"    =>  "editor2-link",
  "editorn-last"    =>  "editor2-last",
  "editorn-first"   =>  "editor2-first",
  "interviewerlink" =>  "interviewer-link",
  "interviewermask" =>  "interviewer-mask",
  "firstn"          =>  "first2",
  "nocat"           =>  "no-tracking",
  "no-cat"          =>  "no-tracking",
  "notracking"      =>  "no-tracking",
  "ISBN"            =>  "isbn",
  "ibsn"            =>  "isbn",
  "ibsn2"           =>  "isbn",
  "lastn"           =>  "last2",
  "local"           =>  "location",
  "part"            =>  "issue",
  "no"              =>  "issue",
  "No"              =>  "issue",
  "No."             =>  "issue",
  "notestitle"      =>  "chapter",
  "nurl"            =>  "url",
  "origmonth"       =>  "month",
  "p"               =>  "page",
  "p."              =>  "page",
  "pmpmid"          =>  "pmid",
  "pp"              =>  "pages",
  "pp."             =>  "pages",
  "publisherid"     =>  "id",
  "titleyear"       =>  "orig-year",
  "translators"     =>  "translator",
  "URL"             =>  "url",
  "vol"             =>  "volume",
  "Vol"             =>  "volume",
  "Vol."            =>  "volume",
  "ARXIV"           =>  "arxiv",
  "cointerviewers"  =>  "others",
  "trans_chapter"   =>  "trans-chapter",
  "trans_title"     =>  "trans-title",
  "DOI"             =>  "doi",
  "publication"     =>  "work", 
  "publicationplace"  =>  "publication-place", 
  "publicationdate"   =>  "publication-date", 
  "chapterurl"      =>  "chapter-url",
  "booktitle"       =>  "book-title",
  "conferenceurl"   =>  "conference-url",
  "timecaption"     =>  "time-caption",
  "contributionurl" =>  "contribution-url",
  "laydate"         =>  "lay-date",
  "laysource"       =>  "lay-source",
  "layurl"          =>  "lay-url",
  "sectionurl"      =>  "section-url",
  "seriesno"        =>  "series-no",
  "nopp"            =>  "no-pp",
  "authorurl"       =>  "author-link",
  "titre"           =>  "title",
  "consulté"        =>  "access-date",
  "autho"           =>  "author",
  "accesdate"       =>  "accessdate",
  "autore"          =>  "author",
  "autore2"         =>  "author2",
  "autore3"         =>  "author3",
  "autore4"         =>  "author4",
  "accessed"        =>  "accessdate",
  "titolo"          =>  "title",
  "rivista"         =>  "magazine",
  "année"           =>  "year",
  "autor"           =>  "author",
  "autor1"          =>  "author1",
  "autor2"          =>  "author2",
  "autor3"          =>  "author3",
  "autor4"          =>  "author4",
  "titlu"           =>  "title",
  "accesso"         =>  "access-date",
  "agencia"         =>  "agency",
  "anno"            =>  "year",
  "annooriginale"   =>  "orig-year",
  "año"             =>  "year",
  "añooriginal"     =>  "orig-year",
  "apellidos"       =>  "last",
  "apellido"        =>  "last",
  "apellidos1"      =>  "last1",
  "apellido1"       =>  "last1",
  "apellidos2"      =>  "last2",
  "apellido2"       =>  "last2",
  "apellidos3"      =>  "last3",
  "apellido3"       =>  "last3",
  "cita"            =>  "quote",
  "citazione"       =>  "quote",
  "città"           =>  "location",
  "coautores"       =>  "coauthors",
  "coautori"        =>  "coauthors",
  "cognome"         =>  "last",
  "cognome1"        =>  "last1",
  "cognome2"        =>  "last2",
  "cognome3"        =>  "last3",
  "dataaccesso"     =>  "access-date",
  "dataarchivio"    =>  "archive-date",
  "editori"         =>  "editors",
  "editorial"       =>  "publisher",
  "edizione"        =>  "edition",
  "enlaceautor"     =>  "author-link",
  "enlaceautor1"    =>  "author-link1",
  "enlaceautor2"    =>  "author-link2",
  "enlaceautor3"    =>  "author-link3",
  "enlaceautor4"    =>  "author-link4",
  "enlaceroto"      =>  "url-status",
  "fecha"           =>  "date",
  "fechaacceso"     =>  "access-date",
  "fechaarchivo"    =>  "archive-date",
  "formato"         =>  "format",
  "giornale"        =>  "journal",
  "idioma"          =>  "language",
  "lingua"          =>  "language",
  "nombre"          =>  "first",
  "primero"         =>  "first",
  "nombre1"         =>  "first1",
  "primero1"        =>  "first1",
  "nombre2"         =>  "first2",
  "primero2"        =>  "first2",
  "nombre3"         =>  "first3",
  "primero3"        =>  "first3",
  "nome"            =>  "first",
  "nome1"           =>  "first1",
  "nome2"           =>  "first2",
  "nome3"           =>  "first3",
  "numero"          =>  "issue",
  "numéro"          =>  "issue",
  "obra"            =>  "work",
  "página"          =>  "page",
  "páginas"         =>  "pages",
  "pagina"          =>  "page",
  "pagine"          =>  "pages",
  "periodico"       =>  "magazine",
  "pubblicazione"   =>  "magazine",
  "publicación"     =>  "journal",
  "puntofinale"     =>  "postscript",
  "seria"           =>  "series",
  "serie"           =>  "series",
  "sitioweb"        =>  "website",
  "sito"            =>  "website",
  "tipo"            =>  "type",
  "título"          =>  "title",
  "ubicación"       =>  "location",
  "urlarchivio"     =>  "archive-url",
  "urlarchivo"      =>  "archive-url",
  "urlmorto"        =>  "url-status",
  "wkautore"        =>  "author-link",
  "wkautore1"       =>  "author-link1",
  "wkautore2"       =>  "author-link2",
  "wkautore3"       =>  "author-link3",
  "coauther"        =>  "coauthors",
  "city"            =>  "location",
  "link"            =>  "url",
  "home"            =>  "work",
  "homelanguage"    =>  "language",
  "episodelink"     =>  "episode-link",
  "mailinglist"     =>  "mailing-list",
  "mapurl"          =>  "map-url",
  "serieslink"      =>  "series-link",
  "başlık"          =>  "title",
  "språk"           =>  "language",
  "datum"           =>  "date",
  "arkivdatum"      =>  "archive-date",
  "arkivurl"        =>  "archive-url",
  "hämtdatum"       =>  "access-date",
  "tidning"         =>  "newspaper",
  "författare"      =>  "author",
  "rubrik"          =>  "title",
  "utgivare"        =>  "publisher",
  "tidskrift"       =>  "journal",
  "efternamn"       =>  "last",
  "år"              =>  "year",
  "jator"           =>  "jstor",
  "jastor"          =>  "jstor",
  "date-access"     =>  "access-date",
  "titre ouvrage"   =>  "work",
  "ville"           =>  "location",
  "titre chapitre"  =>  "chapter",
  "pages totales"   =>  "pages",
  "format électronique" =>  "format",
  "příjmení" => "last1",
  "jméno" => "first1",
  "příjmení1" => "last1",
  "jméno1" => "first1",
  "příjmení2" => "last2",
  "jméno2" => "first2",
  "příjmení3" => "last3",
  "jméno3" => "first3",
  "příjmení4" => "last4",
  "jméno4" => "first4",
  "vydavatel" => "publisher",
  "místo" => "location",
  "rok" => "year",
  "strany" => "page",
  "sarlavha" => "title",
  "ism" => "first",
  "familiya" => "last",
  "sana" => "date",
  "nashriyot" => "publisher",
  "vebsayt" => "website",
  "yil" => "year",
  "muharrir" => "editor",
  "muharrir-havola" => "editor-link",
  "oy" => "month",
  "sahifalar" => "pages",
  "til" => "language",
  "kirish sanasi" => "access-date",
  "joylashuv" => "location",
  "iqtibos" => "quote", 
);

const COMMON_MISTAKES_TOOL = array(
  "accessdate"      =>  "access-date",
  "archivedate"     =>  "archive-date",
  "archiveurl"      =>  "archive-url",
  "authorlink"      =>  "author-link",
  "origyear"        =>  "orig-date",
  "origdate"        =>  "orig-date",
  "airdate"         =>  "air-date");

    // Find these with this on all the various types https://en.wikipedia.org/w/index.php?title=Special:WhatLinksHere/Template:Citation&hidelinks=1&hidetrans=1
const TEMPLATE_CONVERSIONS = array(
               ['cite', 'citation'],
               ['Cite', 'Citation'],
               ['citebook', 'cite book'],
               ['Citebook', 'Cite book'],
               ['cit book', 'cite book'],
               ['Cit book', 'Cite book'],
               ['cite ebook', 'cite book'],
               ['Cite ebook', 'Cite book'],
               ['cite books', 'cite book'],
               ['Cite books', 'Cite book'],
               ['book reference', 'cite book'],
               ['Book reference', 'Cite book'],
               ['web reference', 'cite web'],
               ['Web reference', 'Cite web'],
               ['Conference reference', 'Cite conference'],
               ['conference reference', 'cite conference'],
               ['citejournal', 'cite journal'],
               ['Citejournal', 'Cite journal'],
               ['citeweb', 'cite web'],
               ['Citeweb', 'Cite web'],
               ['cite-web', 'cite web'],
               ['Cite-web', 'Cite web'],
               ['cit web', 'cite web'],
               ['Cit web', 'Cite web'],
               ['cit journal', 'cite journal'],
               ['Cit journal', 'Cite journal'],
               ['cit news', 'cite news'],
               ['Cit news', 'Cite news'],
               ['cite url', 'cite web'],
               ['Cite url', 'Cite web'],
               ['web cite', 'cite web'],
               ['Web cite', 'Cite web'],
               ['book cite', 'cite book'],
               ['Book cite', 'Cite book'],
               ['cite-book', 'cite book'],
               ['Cite-book', 'Cite book'],
               ['citenews', 'cite news'],
               ['Citenews', 'Cite news'],
               ['cite-news', 'cite news'],
               ['Cite-news', 'Cite news'],
               ['citepaper', 'cite journal'],
               ['Citepaper', 'Cite journal'],
               ['cite paper', 'cite journal'],
               ['Cite paper', 'Cite journal'],
               ['cite chapter', 'cite book'],
               ['Cite chapter', 'Cite book'],
               ['citation journal', 'cite journal'],
               ['Citation journal', 'Cite journal'],
               ['cite new', 'cite news'],
               ['Cite new', 'Cite news'],
               // ['cite newspaper', 'cite news'],
               // ['Cite newspaper', 'Cite news'],
               ['cite Web', 'cite web'],
               ['Cite Web', 'Cite web'],
               ['cite media', 'cite AV media'],
               ['Cite media', 'Cite AV media'],
               ['cite av media', 'cite AV media'],
               ['Cite av media', 'Cite AV media'],
               ['cite Journal', 'cite journal'],
               ['Cite Journal', 'Cite journal'],
               ['cite Book', 'cite book'],
               ['Cite Book', 'Cite book'],
               ['cite News', 'cite news'],
               ['Cite News', 'Cite news'],
               ['cite citation', 'citation'],
               ['Cite citation', 'Citation'],
               ['Cite n', 'Cite news'],
               ['cite n', 'cite news'],
               ['Citation news', 'Cite news'],
               ['citation news', 'cite news'],
               ['C news', 'Cite news'],
               ['c news', 'cite news'],
               ['Cute news', 'Cite news'],
               ['cute news', 'cite news'],
               ['Cite news2', 'Cite news'],
               ['cite news2', 'cite news'],
               ['Citar notícia', 'Cite news'],
               ['citar notícia', 'cite news'],
               ['뉴스 인용', 'Cite news'],
               ['Cite study', 'Citation'],
               ['cite study', 'citation'],
               ['Vcite2 journal', 'Cite journal'],
               ['vcite2 journal', 'cite journal'],
               ['Web link', 'Cite web'],
               ['web link', 'cite web'],
               ['Citweb', 'Cite web'],
               ['citweb', 'cite web'],
               ['Citat web', 'Cite web'],
               ['citat web', 'cite web'],
               ['Cite we', 'Cite web'],
               ['cite we', 'cite web'],
               ['Cite w', 'Cite web'],
               ['cite w', 'cite web'],
               ['Cite wb', 'Cite web'],
               ['cite wb', 'cite web'],
               ['Cite web.', 'Cite web'],
               ['cite web.', 'cite web'],
               ['Cw', 'Cite web'],
               ['cw', 'cite web'],
               ['C web', 'Cite web'],
               ['c web', 'cite web'],
               ['Cita web', 'Cite web'],
               ['cita web', 'cite web'],
               ['Cite webpage', 'Cite web'],
               ['cite webpage', 'cite web'],
               ['Weblink', 'Cite web'],
               ['weblink', 'cite web'],
               ['Cite blog', 'Cite web'],
               ['cite blog', 'cite web'],
               ['Web citation', 'Cite web'],
               ['web citation', 'cite web'],
               ['Cite website', 'Cite web'],
               ['cite website', 'cite web'],
               ['Cite page', 'Cite book'],
               ['cite page', 'cite book'],
               ['Cite publication', 'Cite book'],
               ['cite publication', 'cite book'],
               ['Citeencyclopedia', 'Cite encyclopedia'],
               ['citeencyclopedia', 'cite encyclopedia'],
               ['Encyclopedia', 'Cite encyclopedia'],
               ['encyclopedia', 'cite encyclopedia'],
               ['Cita pubblicazione', 'Cite journal'],
               ['cita pubblicazione', 'cite journal'],
               ['Citace elektronické monografie', 'Cite web'],
               ['citace elektronické monografie', 'cite web'],
               ['Chú thích web', 'Cite web'],
               ['Chú thích báo', 'Cite news'],
               ['chú thích web', 'cite web'],
               ['chú thích báo', 'cite news'],
               ['tidskriftsref', 'cite journal'],
               ['Tidskriftsref', 'Cite journal'],
               ['Tidningsref', 'Cite news'],
               ['tidningsref', 'cite news'],
               ['GroveOnline', 'Cite Grove'],
               ['Groveonline', 'Cite Grove'],
               ['groveOnline', 'Cite Grove'],
               ['groveonline', 'Cite Grove'],
               ['NewGroveJazz2002', 'Cite NewGroveJazz2002'],
               ['newGroveJazz2002', 'Cite NewGroveJazz2002'],
               ['NewGrove1980', 'Cite NewGrove1980'],
               ['newGrove1980', 'Cite NewGrove1980'],
               ['citar livro', 'cite book'],
               ['Citar livro', 'Cite book'],
               ['Citace monografie', 'cite book'],
               ['citace monografie', 'Cite book'],
               ['Bokref', 'cite book'],
               ['bokref', 'Cite book'],
               ['Cite press', 'Cite press release'],
               ['cite press', 'cite press release'],
               ['cite media', 'cite AV media'],
               ['Cite media', 'Cite AV media'],
               ['cite audio', 'cite AV media'],
               ['Cite audio', 'Cite AV media'],
               ['vcite video', 'cite AV media'],
               ['Vcite video', 'Cite AV media'],
               ['cite music video', 'cite AV media'],
               ['Cite music video', 'Cite AV media'],
               ['cite visual', 'cite AV media'],
               ['Cite visual', 'Cite AV media'],
               ['cite cd', 'cite AV media'],
               ['Cite cd', 'Cite AV media'],
               ['citevideo', 'cite AV media'],
               ['Citevideo', 'Cite AV media'],
               ['cite AV Media', 'cite AV media'],
               ['Cite AV Media', 'Cite AV media'],
               ['cite song', 'cite AV media'],
               ['Cite song', 'Cite AV media'],
               ['cite AVMedia', 'cite AV media'],
               ['Cite AVMedia', 'Cite AV media'],
               ['cita víde', 'cite AV media'],
               ['Cita víde', 'Cite AV media'],
               ['cite Youtube', 'cite AV media'],
               ['Cite Youtube', 'Cite AV media'],
               ['cite AV', 'cite AV media'],
               ['Cite AV', 'Cite AV media'],
               ['cite YouTube', 'cite AV media'],
               ['Cite YouTube', 'Cite AV media'],
               ['cite documentary', 'cite AV media'],
               ['Cite documentary', 'Cite AV media'],
               ['cite film', 'cite AV media'],
               ['Cite film', 'Cite AV media'],
               ['cite movie', 'cite AV media'],
               ['Cite movie', 'Cite AV media'],
               ['cite dvd', 'cite AV media'],
               ['Cite dvd', 'Cite AV media'],
               ['cite DVD', 'cite AV media'],
               ['Cite DVD', 'Cite AV media'],
               ['cite image', 'cite AV media'],
               ['Cite image', 'Cite AV media'],
               ['cite radio', 'cite AV media'],
               ['Cite radio', 'Cite AV media'],
               ['cite movie', 'cite AV media'],
               ['Cite movie', 'Cite AV media'],
               ['Vcite press release', 'Cite press release'],
               ['vcite press release', 'cite press release'],
               ['Cite media release', 'Cite press release'],
               ['cite media release', 'cite press release'],
               ['Cite press-release', 'Cite press release'],
               ['cite press-release', 'cite press release'],
               ['Cite pr', 'Cite press release'],
               ['cite pr', 'cite press release'],
               ['Cite news release', 'Cite press release'],
               ['cite news release', 'cite press release'],
               ['Cite Press release', 'Cite press release'],
               ['cite Press release', 'cite press release'],
               ['Cite press release.', 'Cite press release'],
               ['cite press release.', 'cite press release'],
               ['Cite pressrelease', 'Cite press release'],
               ['cite pressrelease', 'cite press release'],
               ['Cite standard', 'Cite techreport'],
               ['cite standard', 'cite techreport'],
               ['Cite technical report', 'Cite tech report'],
               ['cite technical report', 'cite tech report'],
               ['Cite techreport', 'Cite tech report'],
               ['cite techreport', 'cite tech report'],
               ['Techrep reference', 'Cite techreport'],
               ['techrep reference', 'cite techreport'],
               ['Cite abstract', 'Cite journal'],
               ['cite abstract', 'cite journal'],
               ['Cytuj_pismo', 'Cite journal'],
               ['cytuj_pismo', 'cite journal'],
               ['Citace periodika', 'Cite journal'],
               ['citace periodika', 'cite journal'],
               ['Cite dissertation', 'Cite thesis'],
               ['cite dissertation', 'cite thesis'],
               ['Citar tese', 'Cite thesis'],
               ['citar tese', 'cite thesis'],
               ['Cite ssrn', 'Cite SSRN'],
               ['cite ssrn', 'cite SSRN'],
               ['Cite plaque', 'Cite sign'],
               ['cite plaque', 'cite sign'],
               ['Cite usenet', 'Cite newsgroup'],
               ['cite usenet', 'cite newsgroup'],
               ['Cite Usenet', 'Cite newsgroup'],
               ['cite Usenet', 'cite newsgroup'],
               ['Navedi novice', 'Cite news'],
               ['navedi novice', 'cite news'],
               ['Cite maps', 'Cite map'],
               ['cite maps', 'cite map'],
               ['Cite biorxiv', 'Cite bioRxiv'],
               ['cite biorxiv', 'cite bioRxiv'],
               ['Cite list', 'Cite mailing list'],
               ['cite list', 'cite mailing list'],
               ['Cite mailinglist', 'Cite mailing list'],
               ['cite mailinglist', 'cite mailing list'],
               ['Cite ArXiv', 'Cite arXiv'],
               ['cite ArXiv', 'cite arXiv'],
               ['Cite arxiv', 'Cite arXiv'],
               ['cite arxiv', 'cite arXiv'],
               ['Cite av media notes', 'Cite AV media notes'],
               ['cite av media notes', 'cite AV media notes'],
               ['Cite DVD-notes', 'Cite AV media notes'],
               ['cite DVD-notes', 'cite AV media notes'],
               ['Cite album notes', 'Cite AV media notes'],
               ['cite album notes', 'cite AV media notes'],
               ['Cite album-notes', 'Cite AV media notes'],
               ['cite album-notes', 'cite AV media notes'],
               ['Liner notes', 'Cite AV media notes'],
               ['liner notes', 'cite AV media notes'],
               ['Cite liner notes', 'Cite AV media notes'],
               ['cite liner notes', 'cite AV media notes'],
               ['Vcite album-notes', 'Cite AV media notes'],
               ['vcite album-notes', 'cite AV media notes'],
               ['Cite music release notes', 'Cite AV media notes'],
               ['cite music release notes', 'cite AV media notes'],
               ['Cite dvd-notes', 'Cite AV media notes'],
               ['cite dvd-notes', 'cite AV media notes'],
               ['Cite DVD notes', 'Cite AV media notes'],
               ['cite DVD notes', 'cite AV media notes'],
               ['Cite citeseerx', 'Cite CiteSeerX'],
               ['cite citeseerx', 'cite CiteSeerX'],
               ['Cite citeseer', 'Cite CiteSeerX'],
               ['cite citeseer', 'cite CiteSeerX'],
               ['Cite CiteSeer', 'Cite CiteSeerX'],
               ['cite CiteSeer', 'cite CiteSeerX'],
               ['Cite proceedings', 'Cite conference'],
               ['cite proceedings', 'cite conference'],
               ['Cite presentation', 'Cite conference'],
               ['cite presentation', 'cite conference'],
               ['Cite mag', 'Cite magazine'],
               ['cite mag', 'cite magazine'],
               ['Cite magazine article', 'Cite magazine'],
               ['cite magazine article', 'cite magazine'],
               ['Cite Magazine', 'Cite magazine'],
               ['cite Magazine', 'cite magazine'],
               ['Cite show', 'Cite episode'],
               ['cite show', 'cite episode'],
               ['Vcite episode', 'Cite episode'],
               ['vcite episode', 'cite episode'],
               ['Vancite episode', 'Cite episode'],
               ['vancite episode', 'cite episode'],
               ['Cite Episode', 'Cite episode'],
               ['cite Episode', 'cite episode'],
               ['Cite encyclopædia', 'Cite encyclopedia'],
               ['cite encyclopædia', 'cite encyclopedia'],
               ['Proquest', 'ProQuest'],
               ['proquest', 'ProQuest'],
               ['Pq', 'ProQuest'],
               ['pq', 'ProQuest'],
               ['DOI', 'doi'],
               ['Doi', 'doi'],
               ['Deadurl', 'Dead link'],
               ['deadurl', 'dead link'],
               ['Citeseerx', 'CiteSeerX'],
               ['citeseerx', 'CiteSeerX'],
               ['GALE', 'Gale'],
               ['Ebsco', 'EBSCOhost'],
               ['Ebscohost', 'EBSCOhost'],
               ['EBSCO', 'EBSCOhost'],
               ['ebsco', 'EBSCOhost'],
               ['ebscohost', 'EBSCOhost'],
               ['eBSCO', 'EBSCOhost'],
               ['Ncid', 'NCID'],
               ['ncid', 'NCID'],
               ['BHLpage', 'BHL page'],
               ['Internet archive', 'Internet Archive'],
               ['internet archive', 'Internet Archive'],
               ['youtube', 'YouTube'],
               ['Youtube', 'YouTube'],
               ['pmc', 'PMC'],
               ['pmid', 'PMID'],
               ['jstor', 'JSTOR'],
               ['lccn', 'LCCN'],
               ['Pmc', 'PMC'],
               ['Pmid', 'PMID'],
               ['Jstor', 'JSTOR'],
               ['Lccn', 'LCCN'],
               ['urn', 'URN'],
               ['Urn', 'URN'],
               ['ISSN search link', 'ISSN link'],
               ['ISSNT', 'ISSN link'],
               ['issn search', 'ISSN link'],
               ['ISSN pair', 'ISSN link'],
               );
