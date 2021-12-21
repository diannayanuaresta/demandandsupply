<?php
$conn = mysqli_connect('localhost', 'root', '', 'demandandsupply');
//fungsi query
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function insertData($data)
{
    global $conn;
    $processType = $data['processType'];
    $p1 = $data['inputP1'];
    $p2 = $data['inputP2'];
    $p3 = $data['inputP3'];
    $p4 = $data['inputP4'];
    $p5 = $data['inputP5'];
    $q1 = $data['inputQ1'];
    $q2 = $data['inputQ2'];
    $q3 = $data['inputQ3'];
    $q4 = $data['inputQ4'];
    $q5 = $data['inputQ5'];

    $query = "INSERT INTO history VALUES('', '$processType', $p1, $p2, $p3, $p4, $p5, $q1, $q2, $q3, $q4, $q5, now())";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusData($id)
{
    global $conn;
    $query = "DELETE FROM history WHERE id=$id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
