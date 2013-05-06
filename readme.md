Tag-dat-mp3.php
================

**What?**
A command line tool for auto taging ~~mp3~~ songs.

*Update:* It should work on none mp3 files too. But I haven't tested that.



Usage
==========

 1. Download the file (Tag-dat-mp3.php.class.php)
 2. Run it with `php tag-dat-mp3.php ./myMusic`



Example
=======
`php tag-dat-mp3.php ./myMusic`
```
myMusic
|-- *artist1*
|   |-- *songname1*.mp3
|   |-- *songname2*.mp3
|   `-- ...
|-- *artist2*
|   |-- *songname3*.mp3
|   |-- *songname4*.mp3
|   `-- ...
`-- ...
```

->

```
myMusic
|-- *artist1*
|   |-- *songname1*.mp3 <- Taged with (title : songname1, artist : artist1)
|   |-- *songname2*.mp3 <- Taged with (title : songname2, artist : artist1)
|   `-- ...
|-- *artist2*
|   |-- *songname3*.mp3 <- Taged with (title : songname3, artist : artist2)
|   |-- *songname4*.mp3 <- Taged with (title : songname4, artist : artist2)
|   `-- ...
`-- ...
```



Requirements
============
A folder with mp3's with the following structure:

```
myMusic
|-- *artist1*
|   |-- *songname1*.mp3
|   |-- *songname2*.mp3
|   `-- ...
|-- *artist2*
|   |-- *songname3*.mp3
|   |-- *songname4*.mp3
|   `-- ...
`-- ...
```