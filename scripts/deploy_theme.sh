#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
PACKAGE_SCRIPT="$ROOT_DIR/scripts/package_theme.sh"

: "${DEPLOY_HOST:?Set DEPLOY_HOST (example: 123.45.67.89)}"
: "${DEPLOY_USER:?Set DEPLOY_USER (example: u123456789)}"
: "${DEPLOY_PATH:?Set DEPLOY_PATH (example: /home/u123456789/domains/example.com/public_html/wp-content/themes)}"

ZIP_OUTPUT="$("$PACKAGE_SCRIPT")"
ZIP_FILE="${ZIP_OUTPUT#Created: }"

scp "$ZIP_FILE" "${DEPLOY_USER}@${DEPLOY_HOST}:${DEPLOY_PATH}/"

echo "Uploaded: $(basename "$ZIP_FILE")"
echo "Next step: in WordPress admin -> Appearance -> Themes -> Add New -> Upload Theme"

