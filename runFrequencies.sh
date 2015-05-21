for f in /home/pofServer/rnaLenguages/frases/*; do filename=$(basename "$f"); idioma=${filename##*.}; php letterfrequency.php $f $idioma; done
