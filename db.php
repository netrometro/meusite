<?php
function banco($sql) {
  $conn = pg_connect(getenv('DATABASE_URL'));
  if (!$conn) {
    die("Erro: " . pg_result_error($conn));
  }
  $resultado = pg_query($sql);
  if (!$resultado) {
    die("Erro: " . pg_result_error($resultado));
  }
  pg_close($conn);
  return $resultado;
}
?>