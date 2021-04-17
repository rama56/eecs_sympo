# eecs_sympo
Website of annual symposium organized by Division of EECS, IISc Bangalore



Developer Notes:

April 9 - Creating this git repository for easy collaboration, development, and deployment. Should also help in transfer of ownership and ensuring code doesn't get lost.

Attempting clean-up.

There are a lot of duplicate files with minor changes.
index.php - current version which says 'Watch recorded videos' and points to google drive links.
index-temp.php - old version which says 'Join Live Event' and points to airmeet links.
index-temp1.php - similar to index-temp with logo image (images/BT_Logo_Indigo_RGB.jpg) removed from Award Sponsors, not the name.

index_backup.php - some content.
index2.php - index_backup + a tab in the heading bar for 'Sponsors' and corresponding section in the body. (all of which appear in index.php)
index.php - from above, speaker detailed info replaced by speaker image tile palette? (apart from the changes for join live vs view recorded, etc.)

index_re.php - seems to be oldest version.
my.php - older version in index.php ; missing current sponsors, brochure, recorded talks.

1 and / are also versions of index.php !
They both differ only in background and text colour formatting.
index.php is recent - Has BT logo, EECS brochure, recorded talks, note to registrants.

Call for sponsorship page.
cfs.html - live version. Has crisp info on CGS, Sponsorship Details.
cfs1.html - older version. Has longer information text. Misses Brochure, Register heading tabs.
cfs-temp.html - Has all heading tabs (except Brochure), also has 'current sponsor' components to it.

Schedule pages.
July 10 : schedule-jul10-temp1.html & schedule-jul10.html - Minor information changes.
July 12 : minor information and spelling changes.


talks.html is old obsolete file.
details/talks.php is used.

What is DS_Store?

Only details/photos are used to source images. details/photos_1 is not used.
TODO:Unify img, images folders with pictures.


css formatting.
There is a stray newstyle_v4.css in the home folder. The one inside css has extra '.blinking' class formatting 
(compared to v3) which is not seen to be used anywhere.
v_1, v_2 are same. v_3 has smaller left margin (for mobile devices?). @media screen and (max-width: 768px)

April 12th - Removing unused files that are typically older versions and duplicates of the used files.

April 16th - Creating an almost empty template for 2021 website.
April 17th - Bug fixes, added countdown timer.

