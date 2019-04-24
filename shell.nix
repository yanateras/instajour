{ pkgs ? import ./pkgs.nix {} }: with pkgs;

stdenvNoCC.mkDerivation {
  name = "instajour";
  buildInputs = [ gnumake inkscape sassc ];
}
