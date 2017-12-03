<?php

/*
	myTinyTodo language pack
	Language: German
	Original name: German
	Author: ptrckkk
	Author Url: http://www.mytinytodo.net
	AppVersion: v1.4.2
	Date: 2017-12-03
*/

class Lang extends DefaultLang
{
    var $js = array
    (
        'confirmDelete' => "Bist du sicher, dass du diese Aufgabe/Tätigkeit löschen möchtest?",
        'confirmLeave' => "Es könnten noch ungespeicherte Daten vorhanden sein. Möchtest du wirklich gehen?",
        'actionNoteSave' => "Speichern",
        'actionNoteCancel' => "Abbrechen",
        'error' => "Ein Fehler ist aufgetreten (klicken für mehr Details)",
        'denied' => "Zugang verwehrt",
        'invalidpass' => "Falsches Passwort",
        'tagfilter' => "Tag:",
        'addList' => "Neue Liste erstellen",
        'renameList' => "Liste umbenennen",
        'deleteList' => "Das wird die aktuelle Liste mit allen Aufgaben/Tätigkeiten löschen.\\nBist du sicher?",
        'clearCompleted' => "Das wird alle abgeschlossenen Aufgaben/Tätigkeiten in dieser Liste löschen.\\nBist du sicher?",
        'settingsSaved' => "Einstellungen werden gespeichert. Neu laden...",
    );

    var $inc = array
    (
        'htab_newtask' => "Neue Aufgabe/Tätigkeit",
        'htab_search' => "Suchen",
        'btn_add' => "Hinzufügen",
        'btn_search' => "Suchen",
        'advanced_add' => "Erweitert",
        'searching' => "Suchen nach",
        'tasks' => "Aufgaben/Tätigkeiten",
        'taskdate_inline_created' => "erstellt am %s",
        'taskdate_inline_completed' => "abgeschlossen am %s",
        'taskdate_inline_duedate' => "fällig am %s",
        'taskdate_created' => "Erstellt",
        'taskdate_completed' => "Abgeschlossen",
        'go_back' => "&lt;&lt; Zurück",
        'edit_task' => "Aufgabe/Tätigkeit bearbeiten",
        'add_task' => "Neue Aufgabe/Tätigkeit",
        'priority' => "Priorität",
        'task' => "Aufgabe/Tätigkeit",
        'note' => "Notiz",
        'tags' => "Tags",
        'save' => "Speichern",
        'cancel' => "Abbrechen",
        'password' => "Passwort",
        'btn_login' => "Login",
        'a_login' => "Login",
        'a_logout' => "Logout",
        'public_tasks' => "Aufgabe/Tätigkeit veröffentlichen",
        'tagcloud' => "Tags",
        'tagfilter_cancel' => "Filter entfernen",
        'sortByHand' => "Per Hand sortieren",
        'sortByPriority' => "Nach Priorität sortieren",
        'sortByDueDate' => "Nach Fälligkeitsdatum sortieren",
        'sortByDateCreated' => "Nach Erstellungsdatum sortieren",
        'sortByDateModified' => "Nach Änderungsdatum sortieren",
        'due' => "Fällig am",
        'daysago' => "vor %d Tagen",
        'indays' => "in %d Tagen",
        'months_short' => array(
            "Jan", "Feb", "Mar", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dez"
        ),
        'months_long' => array(
            "Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September",
            "Oktober", "November", "Dezember"
        ),
        'days_min' => array("So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"),
        'days_long' => array(
            "Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag"
        ),
        'today' => "heute",
        'yesterday' => "gestern",
        'tomorrow' => "morgen",
        'f_past' => "überfällig",
        'f_today' => "Heute und morgen",
        'f_soon' => "Bald",
        'action_edit' => "Bearbeiten",
        'action_note' => "Notiz bearbeiten",
        'action_delete' => "Löschen",
        'action_priority' => "Priorität",
        'action_move' => "Verschieben zu",
        'notes' => "Notizen:",
        'notes_show' => "Zeigen",
        'notes_hide' => "Verstecken",
        'list_new' => "Neue Liste",
        'list_rename' => "Liste umbenennen",
        'list_delete' => "Liste löschen",
        'list_publish' => "Liste veröffentlichen",
        'list_showcompleted' => "Zeige abgeschlossene Aufgaben/Tätigkeiten",
        'list_clearcompleted' => "Leere abgeschlossene Aufgaben/Tätigkeiten",
        'list_select' => "Liste auswählen",
        'list_export' => "Exportieren",
        'list_export_csv' => "CSV",
        'list_export_ical' => "iCalendar",
        'list_rssfeed' => "RSS Feed",
        'alltags' => "Alle Tags:",
        'alltags_show' => "Zeige alle",
        'alltags_hide' => "Verstecke alle",
        'a_settings' => "Einstellungen",
        'rss_feed' => "RSS Feed",
        'feed_title' => "%s",
        'feed_completed_tasks' => "Abgeschlossene Aufgaben/Tätigkeiten",
        'feed_modified_tasks' => "Geänderte Aufgaben/Tätigkeiten",
        'feed_new_tasks' => "Neue Aufgabe/Tätigkeit",
        'alltasks' => "Alle Aufgaben/Tätigkeiten",

        /* Settings */
        'set_header' => "Einstellungen",
        'set_title' => "Titel",
        'set_title_descr' => "(gib an, ob du den Standard-Titel ändern möchtest)",
        'set_language' => "Sprache",
        'set_protection' => "Password-Schutz",
        'set_enabled' => "Einschalten",
        'set_disabled' => "Ausschalten",
        'set_newpass' => "Neues Passwort",
        'set_newpass_descr' => "(leer lassen, wenn das aktuelle Passwort nicht geändert werden soll)",
        'set_smartsyntax' => "Intelligente Syntax",
        'set_smartsyntax_descr' => "(/Priorität/ Aufgaben/Tätigkeiten / Tags/)",
        'set_timezone' => "Zeitzone",
        'set_autotag' => "Autotagging",
        'set_autotag_descr' => "(fügt automatisch neu erstellten Aufgaben/Tätigkeiten Tags des aktuellen Tag-Filters hinzu)",
        'set_sessions' => "Session-Handling Mechanismum",
        'set_sessions_php' => "PHP",
        'set_sessions_files' => "Dateien",
        'set_firstdayofweek' => "Erster Tag der Woche",
        'set_custom' => "Benutzerdefiniert",
        'set_date' => "Datumsformat",
        'set_date2' => "Kurzes Datumsformat",
        'set_shortdate' => "Kurzes Datum (aktuelles Jahr)",
        'set_clock' => "Zeitformat",
        'set_12hour' => "12 Stunden",
        'set_24hour' => "24 Stunden",
        'set_submit' => "Änderungen absenden",
        'set_cancel' => "Abbrechen",
        'set_showdate' => "Zeige Aufgaben-/Tätigkeitsdatum in der Liste",
    );
}
