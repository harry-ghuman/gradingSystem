<body>
<?php
$coursename=$_REQUEST['course'];
//echo $coursename;
$year=$_REQUEST['year'];
?>


<table align='center'>
    <tr>
        <th>Choose Session</th>
        <th><select id="session" onchange="go2()" >
                <option value="">--select--</option>
                <option value="jan-june" >Jan-June</option>
                <option value="july-dec" >July-Dec</option>
            </select>
        </th>
    </tr>
</table>

<input type="hidden" id="course" value="<?php echo $coursename ?>">
<input type="hidden" id="year" value="<?php echo $year ?>">
</body>