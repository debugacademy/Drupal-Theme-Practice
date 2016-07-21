# Create theme
In this assignment, we will create a Drupal theme.

1- Download and install the *7.x-5.6* version of the Zen theme
  - Note: this is NOT the most recent versin of the Zen theme. Therefore, do *not* run 'drush dl zen'.
  - It should reside in sites/all/themes
  - After downloading the theme, you can enable it with the ```drush en``` command, similar to modules
    - Or, as admin, click 'Appearance' and enable using the UI
  - *Commit the addition of the zen theme in its own commit*

2- Read the README from the Zen theme
  - Every base theme is different, so you must read the documentation in the Zen theme before starting.
  - The first file to read is README-first.txt
  - Zen has very thorough and valuable documentation

3- Open the Drupal.org instructions for creating a subtheme
https://www.drupal.org/node/225125

4- Create a subtheme
  - Use the STARTERKIT provided by Zen, following the Zen theme's README-first instructions.
  - Commit the newly 'copy-pasted' STARTERKIT folder, before renaming its contents.

5- As per Zen's README-first instructions, rename your STARTERKIT folder + files + file contents as appropriate.
  - Ensure the word STARTERKIT is replaced by your theme's machine name everywhere in all files within your subtheme
  - Folder and filenames must also be updated to replace STARTERKIT with your theme's name
  - *Commit your subtheme*  

5- Enable your subtheme, then set it as your default theme  
  - You can do this using ```drush en```, or by visiting Appearance under the admin bar.

6- Copy the region--footer and page.tpl.php files from the Zen theme to your subtheme
  - You will need to clear cache for Drupal to notice the new files
  - Ensure you place them in the right sub-folder. There is only 1 location they will work from  
  - *Commit these files*

7- Make a noticeable CSS change to confirm your subtheme is working
  - For example, make the background color red: ```body { background-color: red; }```
  - Add that change to: 
    - If SASS not yet set up: css/components/misc.css
    - If SASS already set up: sass/components/_misc.scss (then compile the sass)
      - To compile SASS, cd to subtheme's root folder then run ```bundle exec compass compile```

8- Complete part 2 of assignment 7. It can be found in the same hw_007 folder.
