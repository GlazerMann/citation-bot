<?php 
const AUTHOR_PARAMETERS = array(
    1  => array('surname'  , 'forename'  , 'initials'  , 'first'  , 'last'  , 'author',
                'surname1' , 'forename1' , 'initials1' , 'first1' , 'last1' , 'author1', 'authors', 'vauthors'),
    2  => array('surname2' , 'forename2' , 'initials2' , 'first2' , 'last2' , 'author2' , 'coauthors', 'coauthor'),
    3  => array('surname3' , 'forename3' , 'initials3' , 'first3' , 'last3' , 'author3' ),
    4  => array('surname4' , 'forename4' , 'initials4' , 'first4' , 'last4' , 'author4' ),
    5  => array('surname5' , 'forename5' , 'initials5' , 'first5' , 'last5' , 'author5' ),
    6  => array('surname6' , 'forename6' , 'initials6' , 'first6' , 'last6' , 'author6' ),
    7  => array('surname7' , 'forename7' , 'initials7' , 'first7' , 'last7' , 'author7' ),
    8  => array('surname8' , 'forename8' , 'initials8' , 'first8' , 'last8' , 'author8' ),
    9  => array('surname9' , 'forename9' , 'initials9' , 'first9' , 'last9' , 'author9' ),
    10 => array('surname10', 'forename10', 'initials10', 'first10', 'last10', 'author10'),
    11 => array('surname11', 'forename11', 'initials11', 'first11', 'last11', 'author11'),
    12 => array('surname12', 'forename12', 'initials12', 'first12', 'last12', 'author12'),
    13 => array('surname13', 'forename13', 'initials13', 'first13', 'last13', 'author13'),
    14 => array('surname14', 'forename14', 'initials14', 'first14', 'last14', 'author14'),
    15 => array('surname15', 'forename15', 'initials15', 'first15', 'last15', 'author15'),
    16 => array('surname16', 'forename16', 'initials16', 'first16', 'last16', 'author16'),
    17 => array('surname17', 'forename17', 'initials17', 'first17', 'last17', 'author17'),
    18 => array('surname18', 'forename18', 'initials18', 'first18', 'last18', 'author18'),
    19 => array('surname19', 'forename19', 'initials19', 'first19', 'last19', 'author19'),
    20 => array('surname20', 'forename20', 'initials20', 'first20', 'last20', 'author20'),
    21 => array('surname21', 'forename21', 'initials21', 'first21', 'last21', 'author21'),
    22 => array('surname22', 'forename22', 'initials22', 'first22', 'last22', 'author22'),
    23 => array('surname23', 'forename23', 'initials23', 'first23', 'last23', 'author23'),
    24 => array('surname24', 'forename24', 'initials24', 'first24', 'last24', 'author24'),
    25 => array('surname25', 'forename25', 'initials25', 'first25', 'last25', 'author25'),
    26 => array('surname26', 'forename26', 'initials26', 'first26', 'last26', 'author26'),
    27 => array('surname27', 'forename27', 'initials27', 'first27', 'last27', 'author27'),
    28 => array('surname28', 'forename28', 'initials28', 'first28', 'last28', 'author28'),
    29 => array('surname29', 'forename29', 'initials29', 'first29', 'last29', 'author29'),
    30 => array('surname30', 'forename30', 'initials30', 'first30', 'last30', 'author30'),
    31 => array('surname31', 'forename31', 'initials31', 'first31', 'last31', 'author31'),
    32 => array('surname32', 'forename32', 'initials32', 'first32', 'last32', 'author32'),
    33 => array('surname33', 'forename33', 'initials33', 'first33', 'last33', 'author33'),
    34 => array('surname34', 'forename34', 'initials34', 'first34', 'last34', 'author34'),
    35 => array('surname35', 'forename35', 'initials35', 'first35', 'last35', 'author35'),
    36 => array('surname36', 'forename36', 'initials36', 'first36', 'last36', 'author36'),
    37 => array('surname37', 'forename37', 'initials37', 'first37', 'last37', 'author37'),
    38 => array('surname38', 'forename38', 'initials38', 'first38', 'last38', 'author38'),
    39 => array('surname39', 'forename39', 'initials39', 'first39', 'last39', 'author39'),
    40 => array('surname40', 'forename40', 'initials40', 'first40', 'last40', 'author40'),
    41 => array('surname41', 'forename41', 'initials41', 'first41', 'last41', 'author41'),
    42 => array('surname42', 'forename42', 'initials42', 'first42', 'last42', 'author42'),
    43 => array('surname43', 'forename43', 'initials43', 'first43', 'last43', 'author43'),
    44 => array('surname44', 'forename44', 'initials44', 'first44', 'last44', 'author44'),
    45 => array('surname45', 'forename45', 'initials45', 'first45', 'last45', 'author45'),
    46 => array('surname46', 'forename46', 'initials46', 'first46', 'last46', 'author46'),
    47 => array('surname47', 'forename47', 'initials47', 'first47', 'last47', 'author47'),
    48 => array('surname48', 'forename48', 'initials48', 'first48', 'last48', 'author48'),
    49 => array('surname49', 'forename49', 'initials49', 'first49', 'last49', 'author49'),
    50 => array('surname50', 'forename50', 'initials50', 'first50', 'last50', 'author50'),
    51 => array('surname51', 'forename51', 'initials51', 'first51', 'last51', 'author51'),
    52 => array('surname52', 'forename52', 'initials52', 'first52', 'last52', 'author52'),
    53 => array('surname53', 'forename53', 'initials53', 'first53', 'last53', 'author53'),
    54 => array('surname54', 'forename54', 'initials54', 'first54', 'last54', 'author54'),
    55 => array('surname55', 'forename55', 'initials55', 'first55', 'last55', 'author55'),
    56 => array('surname56', 'forename56', 'initials56', 'first56', 'last56', 'author56'),
    57 => array('surname57', 'forename57', 'initials57', 'first57', 'last57', 'author57'),
    58 => array('surname58', 'forename58', 'initials58', 'first58', 'last58', 'author58'),
    59 => array('surname59', 'forename59', 'initials59', 'first59', 'last59', 'author59'),
    60 => array('surname60', 'forename60', 'initials60', 'first60', 'last60', 'author60'),
    61 => array('surname61', 'forename61', 'initials61', 'first61', 'last61', 'author61'),
    62 => array('surname62', 'forename62', 'initials62', 'first62', 'last62', 'author62'),
    63 => array('surname63', 'forename63', 'initials63', 'first63', 'last63', 'author63'),
    64 => array('surname64', 'forename64', 'initials64', 'first64', 'last64', 'author64'),
    65 => array('surname65', 'forename65', 'initials65', 'first65', 'last65', 'author65'),
    66 => array('surname66', 'forename66', 'initials66', 'first66', 'last66', 'author66'),
    67 => array('surname67', 'forename67', 'initials67', 'first67', 'last67', 'author67'),
    68 => array('surname68', 'forename68', 'initials68', 'first68', 'last68', 'author68'),
    69 => array('surname69', 'forename69', 'initials69', 'first69', 'last69', 'author69'),
    70 => array('surname70', 'forename70', 'initials70', 'first70', 'last70', 'author70'),
    71 => array('surname71', 'forename71', 'initials71', 'first71', 'last71', 'author71'),
    72 => array('surname72', 'forename72', 'initials72', 'first72', 'last72', 'author72'),
    73 => array('surname73', 'forename73', 'initials73', 'first73', 'last73', 'author73'),
    74 => array('surname74', 'forename74', 'initials74', 'first74', 'last74', 'author74'),
    75 => array('surname75', 'forename75', 'initials75', 'first75', 'last75', 'author75'),
    76 => array('surname76', 'forename76', 'initials76', 'first76', 'last76', 'author76'),
    77 => array('surname77', 'forename77', 'initials77', 'first77', 'last77', 'author77'),
    78 => array('surname78', 'forename78', 'initials78', 'first78', 'last78', 'author78'),
    79 => array('surname79', 'forename79', 'initials79', 'first79', 'last79', 'author79'),
    80 => array('surname80', 'forename80', 'initials80', 'first80', 'last80', 'author80'),
    81 => array('surname81', 'forename81', 'initials81', 'first81', 'last81', 'author81'),
    82 => array('surname82', 'forename82', 'initials82', 'first82', 'last82', 'author82'),
    83 => array('surname83', 'forename83', 'initials83', 'first83', 'last83', 'author83'),
    84 => array('surname84', 'forename84', 'initials84', 'first84', 'last84', 'author84'),
    85 => array('surname85', 'forename85', 'initials85', 'first85', 'last85', 'author85'),
    86 => array('surname86', 'forename86', 'initials86', 'first86', 'last86', 'author86'),
    87 => array('surname87', 'forename87', 'initials87', 'first87', 'last87', 'author87'),
    88 => array('surname88', 'forename88', 'initials88', 'first88', 'last88', 'author88'),
    89 => array('surname89', 'forename89', 'initials89', 'first89', 'last89', 'author89'),
    90 => array('surname90', 'forename90', 'initials90', 'first90', 'last90', 'author90'),
    91 => array('surname91', 'forename91', 'initials91', 'first91', 'last91', 'author91'),
    92 => array('surname92', 'forename92', 'initials92', 'first92', 'last92', 'author92'),
    93 => array('surname93', 'forename93', 'initials93', 'first93', 'last93', 'author93'),
    94 => array('surname94', 'forename94', 'initials94', 'first94', 'last94', 'author94'),
    95 => array('surname95', 'forename95', 'initials95', 'first95', 'last95', 'author95'),
    96 => array('surname96', 'forename96', 'initials96', 'first96', 'last96', 'author96'),
    97 => array('surname97', 'forename97', 'initials97', 'first97', 'last97', 'author97'),
    98 => array('surname98', 'forename98', 'initials98', 'first98', 'last98', 'author98'),
    99 => array('surname99', 'forename99', 'initials99', 'first99', 'last99', 'author99'),
);

const FLATTENED_AUTHOR_PARAMETERS = array('surname', 'forename', 'initials', 
    'first'  , 'last'  , 'author',
    'surname1' , 'forename1' , 'initials1' , 'first1' , 'last1' , 'author1' , 'authors', 'vauthors',
    'surname2' , 'forename2' , 'initials2' , 'first2' , 'last2' , 'author2' , 'coauthors', 'coauthor',
    'surname3' , 'forename3' , 'initials3' , 'first3' , 'last3' , 'author3' ,
    'surname4' , 'forename4' , 'initials4' , 'first4' , 'last4' , 'author4' ,
    'surname5' , 'forename5' , 'initials5' , 'first5' , 'last5' , 'author5' ,
    'surname6' , 'forename6' , 'initials6' , 'first6' , 'last6' , 'author6' ,
    'surname7' , 'forename7' , 'initials7' , 'first7' , 'last7' , 'author7' ,
    'surname8' , 'forename8' , 'initials8' , 'first8' , 'last8' , 'author8' ,
    'surname9' , 'forename9' , 'initials9' , 'first9' , 'last9' , 'author9' ,
    'surname10', 'forename10', 'initials10', 'first10', 'last10', 'author10',
    'surname11', 'forename11', 'initials11', 'first11', 'last11', 'author11',
    'surname12', 'forename12', 'initials12', 'first12', 'last12', 'author12',
    'surname13', 'forename13', 'initials13', 'first13', 'last13', 'author13',
    'surname14', 'forename14', 'initials14', 'first14', 'last14', 'author14',
    'surname15', 'forename15', 'initials15', 'first15', 'last15', 'author15',
    'surname16', 'forename16', 'initials16', 'first16', 'last16', 'author16',
    'surname17', 'forename17', 'initials17', 'first17', 'last17', 'author17',
    'surname18', 'forename18', 'initials18', 'first18', 'last18', 'author18',
    'surname19', 'forename19', 'initials19', 'first19', 'last19', 'author19',
    'surname20', 'forename20', 'initials20', 'first20', 'last20', 'author20',
    'surname21', 'forename21', 'initials21', 'first21', 'last21', 'author21',
    'surname22', 'forename22', 'initials22', 'first22', 'last22', 'author22',
    'surname23', 'forename23', 'initials23', 'first23', 'last23', 'author23',
    'surname24', 'forename24', 'initials24', 'first24', 'last24', 'author24',
    'surname25', 'forename25', 'initials25', 'first25', 'last25', 'author25',
    'surname26', 'forename26', 'initials26', 'first26', 'last26', 'author26',
    'surname27', 'forename27', 'initials27', 'first27', 'last27', 'author27',
    'surname28', 'forename28', 'initials28', 'first28', 'last28', 'author28',
    'surname29', 'forename29', 'initials29', 'first29', 'last29', 'author29',
    'surname30', 'forename30', 'initials30', 'first30', 'last30', 'author30',
    'surname31', 'forename31', 'initials31', 'first31', 'last31', 'author31',
    'surname32', 'forename32', 'initials32', 'first32', 'last32', 'author32',
    'surname33', 'forename33', 'initials33', 'first33', 'last33', 'author33',
    'surname34', 'forename34', 'initials34', 'first34', 'last34', 'author34',
    'surname35', 'forename35', 'initials35', 'first35', 'last35', 'author35',
    'surname36', 'forename36', 'initials36', 'first36', 'last36', 'author36',
    'surname37', 'forename37', 'initials37', 'first37', 'last37', 'author37',
    'surname38', 'forename38', 'initials38', 'first38', 'last38', 'author38',
    'surname39', 'forename39', 'initials39', 'first39', 'last39', 'author39',
    'surname40', 'forename40', 'initials40', 'first40', 'last40', 'author40',
    'surname41', 'forename41', 'initials41', 'first41', 'last41', 'author41',
    'surname42', 'forename42', 'initials42', 'first42', 'last42', 'author42',
    'surname43', 'forename43', 'initials43', 'first43', 'last43', 'author43',
    'surname44', 'forename44', 'initials44', 'first44', 'last44', 'author44',
    'surname45', 'forename45', 'initials45', 'first45', 'last45', 'author45',
    'surname46', 'forename46', 'initials46', 'first46', 'last46', 'author46',
    'surname47', 'forename47', 'initials47', 'first47', 'last47', 'author47',
    'surname48', 'forename48', 'initials48', 'first48', 'last48', 'author48',
    'surname49', 'forename49', 'initials49', 'first49', 'last49', 'author49',
    'surname50', 'forename50', 'initials50', 'first50', 'last50', 'author50',
    'surname51', 'forename51', 'initials51', 'first51', 'last51', 'author51',
    'surname52', 'forename52', 'initials52', 'first52', 'last52', 'author52',
    'surname53', 'forename53', 'initials53', 'first53', 'last53', 'author53',
    'surname54', 'forename54', 'initials54', 'first54', 'last54', 'author54',
    'surname55', 'forename55', 'initials55', 'first55', 'last55', 'author55',
    'surname56', 'forename56', 'initials56', 'first56', 'last56', 'author56',
    'surname57', 'forename57', 'initials57', 'first57', 'last57', 'author57',
    'surname58', 'forename58', 'initials58', 'first58', 'last58', 'author58',
    'surname59', 'forename59', 'initials59', 'first59', 'last59', 'author59',
    'surname60', 'forename60', 'initials60', 'first60', 'last60', 'author60',
    'surname61', 'forename61', 'initials61', 'first61', 'last61', 'author61',
    'surname62', 'forename62', 'initials62', 'first62', 'last62', 'author62',
    'surname63', 'forename63', 'initials63', 'first63', 'last63', 'author63',
    'surname64', 'forename64', 'initials64', 'first64', 'last64', 'author64',
    'surname65', 'forename65', 'initials65', 'first65', 'last65', 'author65',
    'surname66', 'forename66', 'initials66', 'first66', 'last66', 'author66',
    'surname67', 'forename67', 'initials67', 'first67', 'last67', 'author67',
    'surname68', 'forename68', 'initials68', 'first68', 'last68', 'author68',
    'surname69', 'forename69', 'initials69', 'first69', 'last69', 'author69',
    'surname70', 'forename70', 'initials70', 'first70', 'last70', 'author70',
    'surname71', 'forename71', 'initials71', 'first71', 'last71', 'author71',
    'surname72', 'forename72', 'initials72', 'first72', 'last72', 'author72',
    'surname73', 'forename73', 'initials73', 'first73', 'last73', 'author73',
    'surname74', 'forename74', 'initials74', 'first74', 'last74', 'author74',
    'surname75', 'forename75', 'initials75', 'first75', 'last75', 'author75',
    'surname76', 'forename76', 'initials76', 'first76', 'last76', 'author76',
    'surname77', 'forename77', 'initials77', 'first77', 'last77', 'author77',
    'surname78', 'forename78', 'initials78', 'first78', 'last78', 'author78',
    'surname79', 'forename79', 'initials79', 'first79', 'last79', 'author79',
    'surname80', 'forename80', 'initials80', 'first80', 'last80', 'author80',
    'surname81', 'forename81', 'initials81', 'first81', 'last81', 'author81',
    'surname82', 'forename82', 'initials82', 'first82', 'last82', 'author82',
    'surname83', 'forename83', 'initials83', 'first83', 'last83', 'author83',
    'surname84', 'forename84', 'initials84', 'first84', 'last84', 'author84',
    'surname85', 'forename85', 'initials85', 'first85', 'last85', 'author85',
    'surname86', 'forename86', 'initials86', 'first86', 'last86', 'author86',
    'surname87', 'forename87', 'initials87', 'first87', 'last87', 'author87',
    'surname88', 'forename88', 'initials88', 'first88', 'last88', 'author88',
    'surname89', 'forename89', 'initials89', 'first89', 'last89', 'author89',
    'surname90', 'forename90', 'initials90', 'first90', 'last90', 'author90',
    'surname91', 'forename91', 'initials91', 'first91', 'last91', 'author91',
    'surname92', 'forename92', 'initials92', 'first92', 'last92', 'author92',
    'surname93', 'forename93', 'initials93', 'first93', 'last93', 'author93',
    'surname94', 'forename94', 'initials94', 'first94', 'last94', 'author94',
    'surname95', 'forename95', 'initials95', 'first95', 'last95', 'author95',
    'surname96', 'forename96', 'initials96', 'first96', 'last96', 'author96',
    'surname97', 'forename97', 'initials97', 'first97', 'last97', 'author97',
    'surname98', 'forename98', 'initials98', 'first98', 'last98', 'author98',
    'surname99', 'forename99', 'initials99', 'first99', 'last99', 'author99',
);


// Parameter sort order: Capitals then lowercase; single parameters then those repeated for each
// subsequent author or editor; Alphabetical.
// Includes many parameters usually from templates that we do not modify such as {{cite patent}}, because
// that information can also be presented using the generic {{citation}} template, which we do modify.
// This list even includes items that are no longer supported, since we need to leave fixing them to humans
const PARAMETER_LIST = array('ARXIV', 'ASIN', 'ASIN-TLD', 'BIBCODE', 'DOI', 'EISSN', 'HDL', 'ID',
'ISBN', 'ISBN13', 'ISMN', 'ISSN', 'JFM', 'JSTOR', 'LCCN', 'MR', 'OCLC', 'OL', 'OSTI', 'PMC', 'PMID',
'RFC', 'SSRN', 'URL', 'ZBL', 'Author', 'DoiBroken', 'Editor', 'EditorGiven', 'EditorSurname',
 'Embargo', 'PPPrefix', 'PPrefix', 'Ref', 'Author##', 'Editor##', 'EditorGiven##',
 'EditorSurname##',
 'accessdate', 'access-date',  'agency', 'airdate', 'albumlink',
 'albumtype', 'archivedate', 'archive-date', 'archive-format', 'archiveurl', 'archive-url',
 'article', 'article-url-access', 'artist', 'arxiv', 'asin', 'asin-tld', 'at', 'author', 'author-first', 'authorformat',
 'author-format', 'author-last', 'authorlink', 'author-link', 'authormask', 'author-mask',
 'author-name-separator', 'authors', 'author-separator', 'began',
 'bibcode-access', 'bibcode', 'biorxiv', 'booktitle', 'callsign',
 'cartography', 'chapter', 'chapter-format', 'chapterformat', 'chapterlink', 'chapterurl', 'chapter-url', 
 'citeseerx', 'city', 'class', 'cointerviewers', 'collaboration', 'conference','conference-format',
 'conferenceurl', 'conference-url', 'contribution', 'contribution-format', 'contributionurl',
 'credits', 'contribution-url', 'date',
 'deadurl', 'dead-url', 'degree', 'department', 'df', 'dictionary', 'director', 'displayauthors', 'display-authors',
 'displayeditors', 'display-editors', 'docket', 'doi', 'doi-access', 'doi_brokendate', 'doi_inactivedate',
 'doi-broken-date', 'name-list-format', 'chapterformat', 'chapter-format',
 'edition', 'editor', 'editor-first', 'editorformat', 'editor-format', 'editor-last',
 'editorlink', 'editor-link', 'editormask', 'editor-mask', 'editor-name-separator',
 'editors', 'editor-separator', 'eissn', 'embargo', 'ended', 'encyclopaedia', 'encyclopedia', 'entry',
 'entry-format', 'entry-url', 'entry-url-access', 'episode', 'episode-link',
 'episodelink', 'eprint', 'event', 'eventurl', 'event-format', 'first', 'format', 'given', 'hdl', 'hdl-access', 'host', 'id',
 'ignoreisbnerror', 'ignore-isbn-error', 'in', 'inset', 'institution', 'interviewer', 'interviewers',
 'interviewer-mask', 'interviewerlink','interviewermask', 'interviewer-first', 'interviewer-last','interviewer-link',
 'isbn', 'isbn13', 'ismn', 'issn', 'issue', 'jfm', 'journal', 'jstor', 'jstor-access', 'language', 'last',
 'lastauthoramp', 'last-author-amp', 'laydate', 'laysource', 'laysummary', 'layurl', 'lccn', 'location',
 'magazine', 'mailing-list', 'mailinglist', 'map', 'map-format', 'map-url',
 'mapurl', 'medium', 'message-id', 'minutes', 'mode', 'month', 'mr', 'name-separator',
 'network', 'newsgroup', 'newspaper', 'nocat', 'no-cat', 
 'nopp', 'notracking', 'no-tracking', 'notestitle', 'number', 'oclc', 'ol', 'ol-access', 'origyear', 'orig-year', 'osti', 'osti-access', 'others',
 'p', 'page', 'pages', 'people', 'periodical', 'place', 'pmc', 'pmc-embargo-date', 'pmid', 
 'postscript', 'pp','p-prefix',
 'pp-prefix', 'program', 'publicationdate', 'publication-date', 'publicationplace',
 'publication-place', 'publisher', 'quotation', 'quote', 'ref', 'registration', 'rfc',
 'scale', 'script-chapter', 'script-title', 'season', 'section', 'sectionurl', 'section-format', 'section-url',
 'section-url-access', 'sections', 'separator', 'series', 'serieslink', 'seriesno',
 'seriesnumber', 'series-separator', 'sheet', 'sheets', 'ssrn', 'station', 'subject', 'subjectlink', 'subscription',
 'surname', 'template doc demo', 'time', 'timecaption', 'title', 'titlelink', 'trans_chapter',
 'trans_title', 'trans-chapter', 'transcript', 'transcript-format', 'transcripturl', 'transcript-url', 'trans-map',
 'trans-title', 'type', 'url', 'url-access', 'version', 'via','vauthors',
 'veditors', 'volume', 'website', 'work', 'year', 'zbl',
 'author##', 'author##-first', 'author##-last', 'author##link', 'author##-link', 'author##mask',
 'author##-mask', 'author-first##',
 'author-last##', 'authorlink##', 'author-link##', 'authormask##',
 'author-mask##',
 'authors##', 'editor##',
 'editor##-first', 'editor##-last', 'editor##link', 'editor##-link', 'editor##mask',
 'editor##-mask',
 'editors##',
 'first##',
 'given##','last##', 'subject##', 'subjectlink##', 'surname##',
 'inventor-surname', 'inventor-surname##', 'inventor-last', 'inventor-last##', 'inventor-first',
 'inventor-first##',
 'inventor-given', 'inventor-given##', 'inventorlink', 'inventorlink##', 'patent-number', 'publication-number', 'description',
 'pubdate', 'issue-date', 'gdate', 'fdate', 'pridate',
 'assign##', 'inventor##-last', 'inventor##-first',
 'translator-last', 'translator-last##','translator-first', 'translator-first##',
 'translator##-last', 'translator##-first',
 'interviewer##', 'interviewer##-first', 'interviewer##-last', 'interviewer##-link', 'interviewer##-mask', 'interviewer-first##', 'interviewer-last##', 'interviewer-link##', 'interviewer-mask##', 
 );
