<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Job Application Form</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f8;
    }

    .container {
        max-width: 500px;
        margin: 40px auto;
        background: #fff;
        padding: 20px 25px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-top: 12px;
        font-weight: bold;
        font-size: 14px;
    }

    input, select, textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    textarea {
        resize: vertical;
    }

    button {
        width: 100%;
        margin-top: 20px;
        padding: 12px;
        background: #007BFF;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background: #0056b3;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Job Application</h2>

    <form action="process_application.php" method="POST" enctype="multipart/form-data">

        <label>First Name</label>
        <input type="text" name="firstname" required>

        <label>Last Name</label>
        <input type="text" name="lastname" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Phone</label>
        <input type="tel" name="phone" required>

        <label>Address</label>
        <input type="text" name="address" required>

        <label>City</label>
        <input type="text" name="city" required>

        <label>Qualification</label>
        <select name="qualification" required>
            <option value="">-- Select Qualification --</option>
            <option value="BSc">BSc</option>
            <option value="Masters">Masters</option>
            <option value="HND">HND</option>
            <option value="SSCE">SSCE</option>
        </select>

        <label>Class of Degree</label>
        <select name="degree_class" required>
            <option value="">-- Select Class --</option>
            <option value="First Class">First Class</option>
            <option value="Second Class Upper">Second Class Upper</option>
            <option value="Second Class Lower">Second Class Lower</option>
            <option value="Pass">Pass</option>
        </select>

        <label>Date of Birth</label>
        <input type="date" name="dob" required>

        <label>Work Experience</label>
        <textarea name="experience" rows="4" placeholder="Briefly describe your work experience" required></textarea>

        <label>Upload CV</label>
        <input type="file" name="cv" accept=".pdf,.doc,.docx" required>

        <button type="submit">Submit Application</button>

    </form>
</div>

</body>
</html>