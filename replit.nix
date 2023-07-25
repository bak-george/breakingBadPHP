{ pkgs }: {
	deps = [
		pkgs.percona-server
  pkgs.sudo
  pkgs.postgresql
  pkgs.php74
    pkgs.php74Extensions.pdo
    pkgs.sqlite
	];
}