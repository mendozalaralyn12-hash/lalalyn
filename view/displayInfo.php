<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($data['name'] ?? '') ?> — Resume</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'DM Sans', Arial, sans-serif;
            background: #1a1a1a; 
            color: #f5e1a4; 
            margin: 0;
            padding: 20px;
        }

        .resume {
            display: flex;
            max-width: 900px;
            margin: 30px auto;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.6);
        }

        .left, .right {
            padding: 30px;
        }

        .left {
            width: 30%;
            background: #111;
            border-right: 2px solid #ffd700;
        }

        .right {
            width: 70%;
            background: #1a1a1a;
        }

        h1 { font-family: 'DM Serif Display', serif; font-size: 28px; margin: 0 0 10px 0; color: #ffd700; }
        h2 { font-family: 'DM Serif Display', serif; font-size: 20px; margin: 20px 0 10px 0; border-bottom: 2px solid #ffd700; padding-bottom: 5px; color: #ffd700; }
        h3 { font-size: 16px; margin: 10px 0 5px 0; color: #f5e1a4; }
        p, li { font-size: 14px; margin: 3px 0; line-height: 1.4; }

        img.photo {
            max-width: 100%;
            border-radius: 10px;
            margin-top: 15px;
            border: 2px solid #ffd700;
        }

        .contact-info {
            font-size: 13px;
            line-height: 1.5;
            margin-top: 15px;
        }

        .section { margin-bottom: 25px; }
        ul { padding-left: 20px; margin: 5px 0; }
    </style>
</head>
<body>

<!-- Add this at the very top of the body -->
<div style="max-width:900px; margin:20px auto; text-align:right;">
    <a href="http://localhost/mendoza%20cv/index.php"
       style="background:#ffd700; color:#111; padding:8px 15px; border-radius:5px; text-decoration:none; font-weight:bold;">
       Edit
    </a>
</div>


<div class="resume">
    <div class="left">
        <h1><?= htmlspecialchars($data['name'] ?? '') ?></h1>
        <?php if(!empty($data['jobtitle'])): ?>
            <h2><?= htmlspecialchars($data['jobtitle']) ?></h2>
        <?php endif; ?>

        <?php if(!empty($data['photo'])): ?>
            <img src="<?= htmlspecialchars($data['photo']) ?>" alt="Profile Photo" class="photo">
        <?php endif; ?>

        <div class="contact-info">
            <?= htmlspecialchars($data['email'] ?? '') ?><br>
            <?php if(!empty($data['phone'])): ?><?= htmlspecialchars($data['phone']) ?><br><?php endif; ?>
            <?php if(!empty($data['location'])): ?><?= htmlspecialchars($data['location']) ?><br><?php endif; ?>
        </div>
    </div>

    <div class="right">
        <?php if(!empty($data['education'])): ?>
            <div class="section">
                <h2>Education</h2>
                <p><?= nl2br(htmlspecialchars($data['education'])) ?></p>
            </div>
        <?php endif; ?>

        <?php if(!empty($data['skills'])): ?>
            <div class="section">
                <h2>Skills</h2>
                <p><?= nl2br(htmlspecialchars($data['skills'])) ?></p>
            </div>
        <?php endif; ?>

        <?php if(!empty($data['certification'])): ?>
            <div class="section">
                <h2>Certifications</h2>
                <p><?= nl2br(htmlspecialchars($data['certification'])) ?></p>
            </div>
        <?php endif; ?>

        <?php if(!empty($data['experiences'])): ?>
            <div class="section">
                <h2>Experience</h2>
                <?php foreach($data['experiences'] as $exp): ?>
                    <?php if(!empty($exp['title']) || !empty($exp['company'])): ?>
                        <h3>
                            <?= htmlspecialchars($exp['title'] ?? '') ?>
                            <?php if(!empty($exp['company'])): ?> - <?= htmlspecialchars($exp['company']) ?><?php endif; ?>
                        </h3>
                        <?php if(!empty($exp['start']) || !empty($exp['end'])): ?>
                            <small><?= htmlspecialchars(trim(($exp['start'] ?? '') . ' – ' . ($exp['end'] ?? ''), ' –')) ?></small>
                        <?php endif; ?>
                        <?php if(!empty($exp['desc'])): ?>
                            <p><?= nl2br(htmlspecialchars($exp['desc'])) ?></p>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>