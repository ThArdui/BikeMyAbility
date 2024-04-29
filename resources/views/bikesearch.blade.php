<h1> Trouvez votre vélo idéal</h1>
<form action="" method="get">
    @csrf
    <fieldset>
        <legend> Comment souhaitez-vous vivre votre plaisir cyclable?</legend>
        <label><input type="checkbox" name="utility[]" value="solo"> En solo</label><br>
        <label><input type="checkbox" name="utility[]" value="duo"> En duo</label><br>
        <label><input type="checkbox" name="utility[]" value="several"> À plusieurs</label>
    </fieldset>

    <fieldset>
        <legend> Utilisation membres inférieurs</legend>
        <select id="uselegs" name="uselegs" required>
            <option>Utilisation membres inférieurs</option>
            <option>Utilité jambes</option>
            <option>Utilité jambes partielle (je sais un peu marcher ou peu pédaler)</option>
            <option> Pas d'utilité des jambes</option>
        </select>
    </fieldset>
    <fieldset>
        <legend> Utilisation membres supérieurs</legend>
        <select id="usearms" name="usearms" required>
            <option>Utilisation membres supérieurs</option>
            <option> Très bonne utilité des bras (j’ai la force pour pédaler avec les bras)</option>
            <option> Bonne utilité des bras</option>
            <option>Utilité des bras partielle (je sais faire certaines actions comme me tenir au guidon par exemple) </option>
            <option>  Pas d'utilité des bras</option>
        </select>
    </fieldset>

    <fieldset>
        <legend> Equilibre</legend>
        <select id="balance" name="balance" required>
            <option> Equilibre</option>
            <option>Je peux tenir sur une selle</option>
            <option>Je peux tenir sur une selle mais il me faut un soutien supplémentaire</option>
            <option>J’ai besoin d’être dans un siège</option>
            <option>J’ai besoin d’être dans un siège où des éléments de positionnement sont intégrables</option>
            <option> J’ai besoin/ je préfère rester dans mon fauteuil roulant </option>
        </select>
    </fieldset>
    <fieldset>
        <legend>>Dextérité des mains </legend>
        <select id="dexterity" name="dexterity" required>
            <option>>Dextérité des mains</option>
            <option>La dextérité de mes mains est bonne</option>
            <option> La dextérité de mes mains est moyenne</option>
            <option> Difficulté d'usage des mains </option>
        </select>
    </fieldset>
    <fieldset>
        <legend> Pédalage </legend>
        <select id="pedal" name="pedal" required>
            <option>Pedalage</option>
            <option> Je sais pédaler </option>
            <option> Je sais pédaler un peu </option>
            <option> Je sais pas pédaler </option>

        </select>
    </fieldset>

    <input type="submit" value="Je trouve un vélo qui me convient!">



</form>
