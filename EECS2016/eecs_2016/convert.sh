for i in *.JPG; do 
convert "$i" -resize 800x460 "$i"; done
