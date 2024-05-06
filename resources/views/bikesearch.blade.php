<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="text-center"> Trouvez votre vélo idéal</h1>
<form action="/rechercher-velos" method="post">
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
<br>
    <input type="submit" class="btn btn-primary" value="Je trouve un vélo qui me convient!">



</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
</body>
</html>
