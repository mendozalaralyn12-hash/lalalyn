<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume Input - Black & Gold</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        /* Body */
        body {
            font-family: 'DM Sans', Arial, sans-serif;
            background: #1a1a1a;
            padding: 30px;
            margin: 0;
            color: #f5e1a4; /* soft gold text */
        }

        /* Form card */
        form {
            max-width: 900px;
            margin: 0 auto;
            background: #111;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.6);
        }

        h2 {
            color: #f5e1a4; /* gold */
            margin-top: 30px;
            margin-bottom: 15px;
            border-bottom: 2px solid #f5e1a4;
            padding-bottom: 5px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: 500;
            color: #f5e1a4;
        }

        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px 12px;
            margin-top: 5px;
            border: 1px solid #f5e1a4;
            border-radius: 8px;
            background: #222;
            color: #f5e1a4;
            font-size: 16px;
            transition: border-color 0.2s;
        }

        input[type="text"]:focus, input[type="email"]:focus, textarea:focus {
            border-color: #ffd700;
            outline: none;
            background: #1c1c1c;
        }

        input[type="file"] {
            margin-top: 10px;
            color: #f5e1a4;
        }

        /* Experiences */
        .experience-entry {
            margin-top: 15px;
            padding: 15px;
            border: 1px solid #f5e1a4;
            border-radius: 10px;
            background: #1c1c1c;
        }

        .experience-entry h4 {
            margin: 0 0 10px 0;
            color: #ffd700;
        }

        /* Buttons */
        button, input[type="submit"] {
            margin-top: 20px;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            font-size: 16px;
            transition: background 0.3s, color 0.3s;
        }

        #add-experience-btn {
            background: #ffd700; /* gold */
            color: #111;
            margin-right: 10px;
        }

        #add-experience-btn:hover {
            background: #e6c200;
        }

        input[type="submit"] {
            background: #ffd700;
            color: #111;
        }

        input[type="submit"]:hover {
            background: #e6c200;
        }

        /* Scrollbar for textarea in dark theme */
        textarea {
            resize: vertical;
        }
    </style>
</head>
<body>

<form action="controller/CVController.php" method="POST" enctype="multipart/form-data">
    <h2>Personal Info</h2>
    <label for="name">Full Name</label>
    <input type="text" id="name" name="name" required>

    <label for="jobtitle">Job Title</label>
    <input type="text" id="jobtitle" name="jobtitle">

    <label for="email">Email</label>
    <input type="email" id="email" name="email">

    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone">

    <label for="location">Location</label>
    <input type="text" id="location" name="location">

    <label for="photo">Profile Photo</label>
    <input type="file" id="photo" name="photo" accept="image/*">

    <h2>Education & Skills</h2>
    <label for="education">Education</label>
    <textarea id="education" name="education" rows="4"></textarea>

    <label for="skills">Skills</label>
    <textarea id="skills" name="skills" rows="4"></textarea>

    <label for="certification">Certifications</label>
    <textarea id="certification" name="certification" rows="4"></textarea>

    <h2>Experience</h2>
    <div id="experience-section">
        <div class="experience-entry">
            <h4>Experience 1</h4>
            <label>Title</label>
            <input type="text" name="exp_title[]">

            <label>Company</label>
            <input type="text" name="exp_company[]">

            <label>Start Date</label>
            <input type="text" name="exp_start[]">

            <label>End Date</label>
            <input type="text" name="exp_end[]">

            <label>Description</label>
            <textarea name="exp_desc[]" rows="3"></textarea>
        </div>
    </div>

    <button type="button" id="add-experience-btn">Add Another Experience</button>
    <input type="submit" value="Generate Resume">
</form>

<script>
    const addBtn = document.getElementById('add-experience-btn');
    const experienceSection = document.getElementById('experience-section');
    let expCount = 1;

    addBtn.addEventListener('click', () => {
        expCount++;
        const newExp = document.createElement('div');
        newExp.classList.add('experience-entry');
        newExp.innerHTML = `
            <h4>Experience ${expCount}</h4>
            <label>Title</label>
            <input type="text" name="exp_title[]">

            <label>Company</label>
            <input type="text" name="exp_company[]">

            <label>Start Date</label>
            <input type="text" name="exp_start[]">

            <label>End Date</label>
            <input type="text" name="exp_end[]">

            <label>Description</label>
            <textarea name="exp_desc[]" rows="3"></textarea>
        `;
        experienceSection.appendChild(newExp);
    });
</script>
</a>
</body>
</html>