<?php

$team_members = [
      [
        'name' => 'Ditar Qamili',
        'position' => 'Student',
        'bio' => 'Ditar has a background in journalism and has been with the company for over 2 years. he is responsible for overseeing the content and direction of the website.'
      ],
      [
        'name' => 'Erin Bejta',
        'position' => 'Student',
        'bio' => 'Erin has a passion for history and has written several critically acclaimed biographies. He brings a wealth of knowledge and experience to the team.'
      ]
]
foreach ($team_members as $member) {
    echo '<h4>' . $member['name'] . '</h4>';
    echo '<p>' . $member['position'] . '</p>';
    echo '<p>' . $member['bio'] . '</p>';
  }
?>