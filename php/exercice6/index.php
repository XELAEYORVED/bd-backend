<?php
require_once '_team_members.php';
require_once '_functions.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Web Atomic Pickles</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; }
        h1 span { background: #ff5a00; color: #fff; padding: 0 .3em; }
        h2 { color: #ff5a00; font-size: 1em; }
        section { display: flex; flex-wrap: wrap; gap: 1.5em; }
        section div { width: 120px; }
        section img { width: 90px; height: 90px; background: #eee; border-radius: 8px; }
        h3 { font-size: .8em; margin: .3em 0 0; }
        h4 { font-size: .7em; margin: 0; color: #777; }
        footer { margin-top: 2em; height: 40px; background: linear-gradient(#ff8a00, #ff5a00); }
    </style>
</head>
<body>
    <h1><span>Web Atomic Pickles:</span> an explosive web development agency</h1>

    <h2>Our Team:</h2>
    <section>
        <?php
        foreach ($team_members as $member) {
            if (!is_developer($member['job_title'])) {
                show_member($member);
            }
        }
        ?>
    </section>

    <h2>Developers:</h2>
    <section>
        <?php
        foreach ($team_members as $member) {
            if (is_developer($member['job_title'])) {
                show_member($member);
            }
        }
        ?>
    </section>

    <footer></footer>
</body>
</html>
