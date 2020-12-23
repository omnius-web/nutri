<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/common.php');
include_once($_SERVER["DOCUMENT_ROOT"].'/config.php');




// g5_write_q_num 데이터가져옴
$om_rn_sql = " select * from g5_write_q_num ";
$om_rn_query = sql_query($om_rn_sql);
while ($om_rn_row = sql_fetch_array($om_rn_query)) {
  $om_q_nums[$om_rn_row['name']] = array(
    '0' => '',
    '1' => "{$om_rn_row['wr1']}",
    '2' => "{$om_rn_row['wr2']}|{$om_rn_row['wr3']}",
    '3' => "{$om_rn_row['wr4']}|{$om_rn_row['wr5']}|{$om_rn_row['wr6']}",
    '4' => "{$om_rn_row['wr7']}|{$om_rn_row['wr8']}|{$om_rn_row['wr9']}|{$om_rn_row['wr10']}",
    '5' => "{$om_rn_row['wr11']}|{$om_rn_row['wr12']}|{$om_rn_row['wr13']}|{$om_rn_row['wr14']}|{$om_rn_row['wr15']}"
  );
}
// g5_write_q_num 데이터가져옴



// 각 답변 점수
$om_rst_num = array(
  '0' => 0,
  '1' => 2,
  '2' => 4,
  '3' => 6,
  '4' => 8,
  '5' => 10
);
// 각 답변 점수


/*
input name="q1_1" value="0" ~ 5
.......
*/








// 문항별 들어온 post로 결과 배열
$post_test = array(
  'q1_1' => '4',
  'q1_2' => '5',
  'q1_3' => '5',
  'q1_4' => '5',
  'q1_5' => '5',
  'q2_1' => '0',
  'q2_2' => '0',
  'q2_3' => '0',
  'q2_4' => '2',
  'q2_5' => '3',
  'q3_1' => '0',
  'q3_2' => '0',
  'q3_3' => '0',
  'q3_4' => '2',
  'q3_5' => '3',
  'q4_1' => '0',
  'q4_2' => '0',
  'q4_3' => '0',
  'q4_4' => '2',
  'q4_5' => '3',
  'q5_1' => '0',
  'q5_2' => '0',
  'q5_3' => '0',
  'q5_4' => '2',
  'q5_5' => '3',
  'q6_1' => '0',
  'q6_2' => '0',
  'q6_3' => '0',
  'q6_4' => '2',
  'q6_5' => '3',
  'q7_1' => '0',
  'q7_2' => '0',
  'q7_3' => '0',
  'q7_4' => '2',
  'q7_5' => '3',
  'q8_1' => '0',
  'q8_2' => '0',
  'q8_3' => '0',
  'q8_4' => '0',
  'q8_5' => '0',
);

foreach ($post_test as $om_rn_key => $om_rn_value) {
  $om_rst_q[$om_rn_key] = array(
    'q_score' => $om_rst_num[$om_rn_value],
    'q_nums' => array($om_rn_value,$om_q_nums[$om_rn_key][$om_rn_value]),
  );
}

//var_dump($om_rst_q); // 문항별 들어온 post로 결과 배열
/*
각 문항별 post 들어온데이터 => $om_rst_q 에 들어옴
q_score => 각 문항별 점수
q_nums => [ 0~5 중에서 몇번째 답변인지, 해당 추천번호 ]

*/

// 문항별 들어온 post로 결과 배열




// 8개 분류별 총점
for($om_rn_i=1; $om_rn_i<9; $om_rn_i++){
  $om_rns8ob = "q".(string)$om_rn_i;
  $om_rst_score8[$om_rns8ob]['score_sum'] = $om_rst_q[$om_rns8ob.'_1']['q_score']+$om_rst_q[$om_rns8ob.'_2']['q_score']+$om_rst_q[$om_rns8ob.'_3']['q_score']+$om_rst_q[$om_rns8ob.'_4']['q_score']+$om_rst_q[$om_rns8ob.'_5']['q_score'];

  if($om_rst_score8[$om_rns8ob]['score_sum'] <= 10){
    $om_rst_score8[$om_rns8ob]['score_name'] = "좋음";
  }
  if($om_rst_score8[$om_rns8ob]['score_sum'] >= 11 && $om_rst_score8[$om_rns8ob]['score_sum'] <= 20){
    $om_rst_score8[$om_rns8ob]['score_name'] = "주의";
  }
  if($om_rst_score8[$om_rns8ob]['score_sum'] >= 21 && $om_rst_score8[$om_rns8ob]['score_sum'] <= 40){
    $om_rst_score8[$om_rns8ob]['score_name'] = "관리";
  }
  if($om_rst_score8[$om_rns8ob]['score_sum'] > 40){
    $om_rst_score8[$om_rns8ob]['score_name'] = "심각";
  }

  // 각 분류별 매우나쁨 나온 갯수
  $om_vb_count[$om_rns8ob] = 0;
  for($om_vb=1;$om_vb<=5;$om_vb++){
    if($om_rst_q[$om_rns8ob."_".$om_vb]['q_nums'][0] == '5'){
      $om_vb_count[$om_rns8ob] = $om_vb_count[$om_rns8ob]+1;
    }
  }
  // 각 분류별 매우나쁨 나온 갯수
}
// var_dump($om_rst_score8); // 8개 분류별 총점
// var_dump($om_vb_count); // 각 분류별 매우나쁨 나온 갯수

// 8개 분류별 총점







// 8개 분류중에서 가장 큰수 & 가장 작은수

foreach ($om_rst_score8 as $ors8_key => $ors8_value) {
  $om_max_min_score[] = $ors8_value['score_sum'];
}
$om_max_rst_score = max($om_max_min_score);
$om_min_rst_score = min($om_max_min_score);
// var_dump($om_max_rst_score); // 8개 분류중에서 가장 큰수 & 가장 작은수
// var_dump($om_min_rst_score); // 8개 분류중에서 가장 큰수 & 가장 작은수


// 8개 분류중에서 가장 큰수 & 가장 작은수



// max min 중에서 동일한점수 매우심각 확인해서 최종 16개유형 결과

foreach ($om_rst_q as $orq_key => $orq_value) {
  if($orq_value['q_nums'][0] == '5'){
    $om_16bunru = "bad";
  }
}

if($om_16bunru == 'bad'){
  foreach ($om_max_min_score as $orms_key => $orms_value) {
    if($om_max_rst_score == $orms_value){
      $om_rst_bunru_arr[] = $orms_key; // 가장높고 동일한 점수 배열
    }
  }
  foreach ($om_rst_bunru_arr as $orba_key => $orba_value) {
    (string)$om_sc_num = $orba_value+1;
    $om_rst_max_min_arr[] = $om_vb_count['q'.(string)$om_sc_num];
    $om_rst_max_min_arr2[] = (string)$om_sc_num;
  }
  $om_rst_bunru_sub = max($om_rst_max_min_arr);
  $om_rst_bunru_sub = array_search($om_rst_bunru_sub, $om_rst_max_min_arr);
  $om_rst_bunru_sub = $om_rst_max_min_arr2[$om_rst_bunru_sub];
}
else{
  $om_16bunru = 'good';
  foreach ($om_max_min_score as $orms_key => $orms_value) {
    if($om_min_rst_score == $orms_value){
      $om_rst_bunru_arr[] = $orms_key; // 가장낮고 동일한 점수 배열
    }
  }
  foreach ($om_rst_bunru_arr as $orba_key => $orba_value) {
    (string)$om_sc_num = $orba_value+1;
    $om_rst_max_min_arr2[] = (string)$om_sc_num;
  }
  $om_rst_bunru_sub = mt_rand(0,count($om_rst_max_min_arr2)-1);
  $om_rst_bunru_sub = $om_rst_max_min_arr2[$om_rst_bunru_sub];
}



// var_dump($om_rst_bunru_arr); // 가장 높거나 낮고 동일한 점수 배열

// max min 중에서 동일한점수 매우심각 확인해서 최종 16개유형 결과






// 주의/관리 나온것만 분류

foreach ($om_rst_score8 as $om_rs8_jg_key => $om_rs8_jg_value) {
  if($om_rs8_jg_value['score_name'] == "관리"){
    $om_rst_jg[$om_rs8_jg_key] = "gwan";
  }
  if($om_rs8_jg_value['score_name'] == "심각"){
    $om_rst_jg[$om_rs8_jg_key] = "sim";
  }
}

// 주의/관리 나온것만 분류








// 8개 총점 평균
foreach ($om_rst_score8 as $om_rs8_key => $om_rs8_value) {
  $om_rst8_aver = $om_rst8_aver + $om_rs8_value['score_sum'];
}
$om_rst8_aver = $om_rst8_aver/8;
// echo $om_rst8_aver; // 8개 총점 평균
// 8개 총점 평균


















/* 최종결과 */

/*


*** 위험형
유형명
$om_contents[$om_16bunru][$om_rst_bunru_sub][0]
$om_contents[$om_16bunru][$om_rst_bunru_sub][1]


홍길동 님의 세포유형
홍길동님은 $om_contents[$om_16bunru][$om_rst_bunru_sub][0] 입니다

내용 -> $om_contents[$om_16bunru][$om_rst_bunru_sub][2]

증상
$om_contents[$om_16bunru][$om_rst_bunru_sub][3]

증상 상세내용(클릭)
$om_contents[$om_16bunru][$om_rst_bunru_sub][4]

홍길동님의 상세진단
8가지 위험점수
$om_rst_score8 ->
array => q1['score_sum'], q2['score_sum'], q3['score_sum'] ......

8가지 원 위험점수
8개 모두 출력되어야함
$om_rst_score8 ->
array => q1['score_sum'], q2['score_sum'], q3['score_sum'] ......
array => q1['score_name'], q2['score_name'], q3['score_name'] ......


관리/심각 나온항목에 대한 권장사항
$om_rst_jg array => q1['gwan'], q2['sim'] ......
foreach ($om_rst_jg as $omrjg_key => $omrjg_value) {
  echo $om_contents2[$omrjg_key][$omrjg_value][0]."<br>";
  echo $om_contents2[$omrjg_key][$omrjg_value][1]."<br>";
  echo $om_contents2[$omrjg_key][$omrjg_value][2]."<br>";
}


홍길동 님 세포 건강 개선방법
$om_contents[$om_16bunru][$om_rst_bunru_sub][0]에게 권합니다.
$om_contents[$om_16bunru][$om_rst_bunru_sub][5]

권장 파이토뉴트리언트는 이렇습니다.
$om_contents[$om_16bunru][$om_rst_bunru_sub][6]



*/


/* 최종결과 */




include_once($_SERVER["DOCUMENT_ROOT"].'/models/db_arr.php');



// var_dump($om_16bunru); // 최종 건강형 or 위험형
// var_dump($om_rst_bunru_sub); // 최종 16개 분류 결과
// exit;


// 각종 결과값
var_dump($om_rst_q); // 문항별 들어온 post로 결과 배열
echo "<br><br>";
var_dump($om_rst_score8); // 8개 분류별 총점
echo "<br><br>";
var_dump($om_vb_count); // 각 분류별 매우나쁨 나온 갯수
echo "<br><br>";
var_dump($om_16bunru); // 최종 건강형 or 위험형
echo "<br><br>";
var_dump($om_rst_bunru_sub); // 최종 16개 분류 결과
echo "<br><br>";
var_dump($om_max_rst_score); // 8개 분류중에서 가장 큰수 & 가장 작은수
echo "<br><br>";
var_dump($om_min_rst_score); // 8개 분류중에서 가장 큰수 & 가장 작은수
echo "<br><br>";
var_dump($om_rst_bunru_arr); // 가장 높거나 낮고 동일한 점수 배열
echo "<br><br>";
var_dump($om_rst_jg); // 관리/심각 나온것 따로분류
echo "<br><br>";
echo $om_rst8_aver; // 8개 총점 평균
?>
