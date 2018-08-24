#!/bin/sh

set -e

[ -z "${GITHUB_PAT}" ] && exit 99
git config --global user.email "martins@gmail.com"
git config --global user.name "Martin Smith"
if [ TRAVIS_PULL_REQUEST -gt 0 ]
then
  ${TRAVIS_PULL_REQUEST_BRANCH}
else
  BRANCH_NAME = ${TRAVIS_BRANCH}
fi;
git clone -b $BRANCH_NAME https://${GITHUB_PAT}@github.com/${TRAVIS_REPO_SLUG}.git file-maintenance
cd file-maintenance
php maintain_files.php
git add --all *
git commit -m"Automated file maintenance" || true
git push -q origin $BRANCH_NAME
