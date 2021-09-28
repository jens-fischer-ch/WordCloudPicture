# Wie erstellt man mit Python ein „Word Cloud“-Bild?

Bei einem „Word Cloud“-Bild handelt es sich um eine Illustration zur Fragestellung: „Wie häufig kommt ein Wort in Relation zu anderen Wörter innerhalb des selben Kontext vor?“. Bei dem Kontext kann es sich zum Beispiel um einen Fachartikel handeln. Bei den nun aufgezeigten Schritten wird in dieser Stelle bewusst vereinfacht um die Grundidee des Erstellens eines solchen Bildes besser zu verstehen.

    1. Erzeugen einer Liste mit allen vorkommenden Wörter in dem zu untersuchenden Text
    2. Die obige Liste um die Häufigkeit der einzelnen Wörter innerhalb des Textes ergänzen
    3. Die Liste nach der Häufigkeit aufsteigend sortieren
    4. Die Liste um einen Zähler ergänzen und von oben nach unten durchnummerieren
    5. Ein rechteckiges Bild mit dem gewünschten Hintergrund erstellen
    6. Alle Wörter aus der Liste als Text in das Bild plazieren, wobei der Zähler aus Schritt 4 die Schriftgrösse ergibt

Der jetzt kommende Teil ist zwar für das eigentliche Erstellen des Bildes nicht notwendig, aber erzeugt eine überschaubare Wortliste und damit ein verständlicheres Bild. Wenn man sich die Wörterliste aus Schritt 1 anschaut stellt man fest, dass einige Wörter gibt die mehr oder weniger mehrfach in der Liste vorkommen. Das geschieht dadurch, dass ein Wort im Text entweder vollständig alleine oder mit Satzzeichen ergänzt stehen kann. Daraus ergibt sich, dass ein Wort ersteinmal hinsichtlicht Zeichen, die im eigentlichem Sinne keine Buchstaben sind, bereinigt werden muss bevor es als mögliches neies Wort aufgenommen werden darf. Nachdem man die Bereinung vor der möglichen Aufnahme in die Wörterliste beachtet wird, wird man danach auf ein weiteres Phänomen in der Wörterlidte stossen. Es gibt viele Wörter, die im Grunde keine wichtigen Wörter, sogenannte Schlagwörter, für den Textinhalt sind. Die als unnötig betrachteten Wörter in die Wörterliste aufzunehmen macht also genau betrachtet keinen Sinn. Diese Art von Wörter nennt man auch Stop-Wörter, da beim Auftreten dieser Wörter mit der nachfolgende Verarbeitung gestoppt wird und mit dem nächsten Wort begonnen wird. 
