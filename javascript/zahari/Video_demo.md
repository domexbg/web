Capture screen video as .OGV file
----------------------------------
```
recordmydesktop --on-the-fly-encoding --v_quality=30 -x 970 -y 200 --no-sound --fps=10 \
                --width=920 --height=800 -o video-test-`date +%s` 1>/dev/null 2>/dev/null
```

Convert screen video to .MP4 file
----------------------------------
```
ffmpeg -i video-test-1440582584.ogv -f mp4 demo.mp4
```

Uload .MP4 video to https://vid.me
----------------------------------
