#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
PACKAGE_SCRIPT="$ROOT_DIR/scripts/package_theme.sh"

if [[ ! -x "$PACKAGE_SCRIPT" ]]; then
  echo "Missing package script: $PACKAGE_SCRIPT" >&2
  exit 1
fi

: "${WP_ADMIN_URL:?Set WP_ADMIN_URL (example: https://example.com/wp-admin)}"

ZIP_OUTPUT="$("$PACKAGE_SCRIPT")"
ZIP_FILE="${ZIP_OUTPUT#Created: }"
UPLOAD_URL="${WP_ADMIN_URL%/}/theme-install.php?tab=upload"

echo "$ZIP_OUTPUT"
echo "Theme zip ready: $ZIP_FILE"
echo "Upload page: $UPLOAD_URL"

if [[ "${NO_OPEN:-0}" == "1" ]]; then
  echo "NO_OPEN=1 set, skipping browser open."
  exit 0
fi

open "$UPLOAD_URL"
echo "Opened WordPress theme upload page in browser."

