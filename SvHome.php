<?php include_once 'SvHeader.php'; ?>
<style>
    .container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 0 15px;
    }

    .row {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
    }

    .card {
        flex: 1;
        min-width: 200px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        text-align: center;
        padding: 20px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card h3 {
        margin-bottom: 10px;
        font-size: 1.2em;
        color: #333;
    }

    .card p {
        font-size: 1.1em;
        color: #666;
    }

    h3.dashboard-title {
        text-align: center;
        font-size: 2em;
        margin-bottom: 20px;
        color: #333;
    }
</style>
<?php

$sql_student = "SELECT * FROM `students` WHERE 'student_supervisor_id' = 'supervisor_id'";

$result_student = $conn->query($sql_student);

?>
<h3 class="dashboard-title">Dashboard</h3>

<div class="container">
    <div class="row">
        <div class="card" onclick="window.location='SvViewStu.php';" style="cursor: pointer;">
            <h3>Students</h3>
            <p><?= $result_student->num_rows; ?></p>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>