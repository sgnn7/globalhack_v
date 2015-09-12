# GlobalHack V

Source code repository for Justice League code

Auto github push script:
```
$  while [ true ]; do echo "Grabbing..."; rsync -avz pashleco@pashle.com:public_html . && git add . && git commit -m "Autocommit - $(date +%y%m%d-%H%M)" && git push origin HEAD; echo "Sleeping..."; sleep 60; done

```
