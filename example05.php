<?php
// �������� ��� ������
$country_code = get_country_code($_SERVER['REMOTE_ADDR']);  
  
// ���� ������ US  
if ($country_code == 'US') {  
  
    // ���������� �����
    echo form_input_state();  
}  
