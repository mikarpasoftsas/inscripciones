# git add *
# git commit -m "Commit Files and Folders"
# git config git-ftp.production-creacttive.user ftp://162.241.139.215/
# git config git-ftp.production-creacttive.url repository@logos.igi-la.com
# git config git-ftp.production-creacttive.password R3posiTor1
# git config git-ftp.production-creacttive.insecure 1
git config git-ftp.url ftp://162.241.139.215/
git config git-ftp.user repository@logos.igi-la.com
git config git-ftp.password R3posiTor1
git ftp add-scope production 162.241.139.215
git ftp init -s production


# git config git-ftp.insecure 1
# The first time enabled this line for INIT and push must be disabled.
# git ftp push -s production-creacttive
# git ftp init -v
# git ftp init
# git ftp push
sleep 20