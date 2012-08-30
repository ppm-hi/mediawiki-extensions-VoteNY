<?php
/**
 * Internationalization file for the Vote extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Aaron Wright <aaron.wright@gmail.com>
 * @author David Pean <david.pean@gmail.com>
 */
$messages['en'] = array(
	'voteny-desc' => 'JavaScript-based voting with the <tt>&lt;vote&gt;</tt> tag',
	'voteny-link' => 'Vote',
	'voteny-unvote-link' => 'unvote',
	'voteny-community-score' => 'community score: $1',
	'voteny-ratings' => '{{PLURAL:$1|one rating|$1 ratings}}',
	'voteny-remove' => 'remove',
	'voteny-gave-this' => 'you gave this a $1',
	'voteny-votes' => '{{PLURAL:$1|one vote|$1 votes}}',
	// Special:TopRatings
	'topratings' => 'Top rated pages',
	'topratings-no-pages' => 'No top rated pages.',
	// For Special:ListGroupRights
	'right-vote' => 'Vote pages',
);

/** Message documentation (Message documentation) */
$messages['qqq'] = array(
	'voteny-link' => 'Link title',
	'voteny-unvote-link' => 'Displayed to the user after their vote has been successfully added; they can click on this link to remove their vote.',
	'voteny-community-score' => 'Community score is the average of votes a page has been given, $1 is the actual score in numbers (i.e. 4.5 or 3)',
	'voteny-remove' => 'Link title, clicking on this link removes your vote. Refer to the [[mw:File:VoteNY.png|image]] for details.',
	'voteny-gave-this' => '$1 is a number, the vote you gave to the page. Refer to the [[mw:File:VoteNY.png|image]] for details.',
	'topratings' => 'Title of Special:TopRatings, as shown on the special page itself and on Special:SpecialPages',
	'topratings-no-pages' => 'Displayed on Special:TopRatings if there are no top rated pages, i.e. if no pages have been rated on the wiki at all.',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'voteny-desc' => 'Ergänzt das Tag <tt>&lt;vote&gt;</tt> zur JavaScript-basierten Abstimmung.',
	'voteny-link' => 'Abstimmen',
	'voteny-unvote-link' => 'nicht abstimmen',
	'voteny-community-score' => 'Punktestand der Gemeinschaft: $1',
	'voteny-ratings' => '{{PLURAL:$1|Eine Bewertung|$1 Bewertungen}}',
	'voteny-remove' => 'entfernen',
	'voteny-gave-this' => 'Du hast diesem eine $1 gegeben.',
	'voteny-votes' => '{{PLURAL:$1|Eine Abstimmung|$1 Abstimmungen}}',
	'topratings' => 'Höchstbewertete Seiten',
	'topratings-no-pages' => 'Keine höchstbewerteten Seiten vorhanden.',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'voteny-desc' => 'Wótgłosowanje z toflicku <tt>&lt;vote&gt;</tt> na zakłaźe JavaScripta',
	'voteny-link' => 'Wótgłosowaś',
	'voteny-unvote-link' => 'Wótgłosowanje anulěrowaś',
	'voteny-community-score' => 'Licba głosow zgromaźeństwa: $1',
	'voteny-ratings' => '{{PLURAL:$1|jadno pógódnośenje|$1 pógódnośeni|$1 pógódnośenja|$1 pógódnośenjow}}',
	'voteny-remove' => 'wótpóraś',
	'voteny-gave-this' => 'sy toś tomu $1 dał',
	'voteny-votes' => '{{PLURAL:$1|jaden głos|$1 głosa|$1 głose|$1 głosow}}',
	'topratings' => 'Nejwuše pógódnośone boki',
	'topratings-no-pages' => 'Žedne nejwuše pógódnośone boki.',
);

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'voteny-desc' => 'Votación basada en JavaScript con la etiqueta <tt>&lt;vote&gt;</tt>',
	'voteny-link' => 'Votar',
	'voteny-unvote-link' => 'Eliminar voto',
	'voteny-community-score' => 'puntuación de la comunidad: $1',
	'voteny-ratings' => '{{PLURAL:$1|una valoración|$1 valoraciones}}',
	'voteny-remove' => 'eliminar',
	'voteny-gave-this' => 'le diste a esto un $1',
	'voteny-votes' => '{{PLURAL:$1|un voto|$1 votos}}',
	'topratings' => 'Páginas más valoradas',
	'topratings-no-pages' => 'No hay páginas mejor valoradas',
);

/** Finnish (suomi)
 * @author Jack Phoenix <jack@countervandalism.net>
 */
$messages['fi'] = array(
	'voteny-link' => 'Äänestä',
	'voteny-unvote-link' => 'poista ääni',
	'voteny-community-score' => 'yhteisön antama pistemäärä: $1',
	'voteny-ratings' => '{{PLURAL:$1|yksi arvostelu|$1 arvostelua}}',
	'voteny-remove' => 'poista',
	'voteny-gave-this' => 'annoit tälle {{PLURAL:$1|yhden tähden|$1 tähteä}}',
	'voteny-votes' => '{{PLURAL:$1|yksi ääni|$1 ääntä}}',
	'topratings' => 'Huippusivut',
	'topratings-no-pages' => 'Ei huippusivuja.',
);

/** French (français)
 * @author Jack Phoenix <jack@countervandalism.net>
 */
$messages['fr'] = array(
	'voteny-link' => 'Voter',
	'voteny-unvote-link' => 'supprimer vote',
	'voteny-remove' => 'supprimer',
	'voteny-votes' => '{{PLURAL:$1|un vote|$1 votes}}',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'voteny-desc' => 'Wothłosowanje z tafličku <tt>&lt;vote&gt;</tt> na zakładźe JavaScripta',
	'voteny-link' => 'Wothłosować',
	'voteny-unvote-link' => 'Wothłosowanje anulować',
	'voteny-community-score' => 'Ličba hłosow zhromadźenstwa: $1',
	'voteny-ratings' => '{{PLURAL:$1|jedne pohódnoćenje|$1 pohódnoćeni|$1 pohódnoćenja|$1 pohódnoćenjow}}',
	'voteny-remove' => 'wotstronić',
	'voteny-gave-this' => 'sy tutomu $1 dał',
	'voteny-votes' => '{{PLURAL:$1|jedyn hłós|$1 hłosaj|$1 hłosy|$1 hłosow}}',
	'topratings' => 'Najwyše pohódnoćene strony',
	'topratings-no-pages' => 'Žane najwyše pohódnoćene strony.',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'voteny-desc' => '<tt>&lt;vote&gt;</tt> タグを使用した、JavaScript ベースの投票',
	'voteny-link' => '投票',
	'voteny-unvote-link' => '投票取り消し',
	'voteny-community-score' => 'コミュニティでの得点: $1',
	'voteny-ratings' => '{{PLURAL:$1|$1 評価}}',
	'voteny-remove' => '除去',
	'voteny-gave-this' => 'あなたはこれを $1 と評価しました',
	'voteny-votes' => '{{PLURAL:$1|$1 票}}',
	'topratings' => '評価が高いページ',
	'topratings-no-pages' => '評価が高いページはありません。',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'voteny-desc' => 'Гласање на основа на JavaScript со ознаката <tt>&lt;vote&gt;</tt>',
	'voteny-link' => 'Гласај',
	'voteny-unvote-link' => 'повлечи глас',
	'voteny-community-score' => 'бодови од заедницата: $1',
	'voteny-ratings' => '{{PLURAL:$1|една оценка|$1 оценки}}',
	'voteny-remove' => 'отстрани',
	'voteny-gave-this' => 'страницава  ја оценивте со $1',
	'voteny-votes' => '{{PLURAL:$1|еден глас|$1 гласа}}',
	'topratings' => 'Водечки страници',
	'topratings-no-pages' => 'Нема водечки страници.',
);

/** Dutch (Nederlands)
 * @author Mitchel Corstjens
 * @author Siebrand
 */
$messages['nl'] = array(
	'voteny-link' => 'Stemmen',
	'voteny-unvote-link' => 'stem terugtrekken',
	'voteny-community-score' => 'gemeenschapsscore: $1',
	'voteny-remove' => 'verwijderen',
	'voteny-gave-this' => 'u heeft een $1 gegeven',
	'voteny-votes' => '{{PLURAL:$1|één stem|$1 stemmen}}',
	'topratings' => "Meest gewaardeerde pagina's",
	'topratings-no-pages' => "Er zijn nog geen meest gewaardeerde pagina's.",
);

/** Polish (polski) */
$messages['pl'] = array(
	'voteny-link' => 'Głosuj',
	'voteny-unvote-link' => 'Anuluj',
	'voteny-community-score' => 'Wynik wśród społeczności: $1',
	'voteny-ratings' => '{{PLURAL:$1|1 głos|$1 głosy|$1 głosów}}',
	'voteny-remove' => 'usuń',
	'voteny-gave-this' => 'Oceniłeś to na $1',
	'voteny-votes' => '{{PLURAL:$1|1 głos|$1 głosy|$1 głosów}}',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'voteny-desc' => 'Botohan na nakabatay sa JavaScript na mayroong tatak na <tt>&lt;bumoto&gt;</tt>',
	'voteny-link' => 'Bumoto',
	'voteny-unvote-link' => 'huwag bumoto',
	'voteny-community-score' => 'puntos ng pamayanan: $1',
	'voteny-ratings' => '{{PLURAL:$1|isang pag-aantas|$1 mga pag-aantas}}',
	'voteny-remove' => 'tanggalin',
	'voteny-gave-this' => 'binigyan mo ito ng isang $1',
	'voteny-votes' => '{{PLURAL:$1| isang boto| $1 mga boto}}',
	'topratings' => 'Mga pahinang nangunguna sa pag-aantas',
	'topratings-no-pages' => 'Walang mga pahinang nangunguna sa pag-aantas.',
);

