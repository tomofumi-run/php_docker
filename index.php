<?php
  echo "PHPを実行するコンテナに必要なことは2つ";
  echo "1つ目、PHPのコンテナイメージ (DockerHubを使用)";
  echo "2つ目、PHPの記述で表示されるかの確認 (index.php)";

  echo "まずは、DockerHubで「PHP」を検索";
  echo "Supported tags and ... をクリックし、使用するイメージを確認";
  echo "今回はPHPよApacheサーバーが一緒になっているイメージを使用";

  echo "index.phpを作成して、表示させたい内容を記述";
  echo "コンテナを起動！ docker run -p 4000:80 -v ${PWD}:/var/www/html -d php:apache";
  echo "-p、ポート番号の指定 Webサーバーは基本80番、コンテナは4000番を指定";
  echo "-v ボリューム指定 コンテナとローカルディレクトリの連携を行う";
  echo "-d バックグラウンドでの処理にする";
  echo "docker ps -a で動作しているコンテナを特定";
  echo "docker stop hogehoge コンテナをストップさせる";

?>