#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
THEME_SLUG="${THEME_SLUG:-recompute-repair}"
THEME_DIR="$ROOT_DIR/Public HTML/wp-content/themes/$THEME_SLUG"
DIST_DIR="$ROOT_DIR/dist"
STAMP="$(date +%Y%m%d-%H%M%S)"
OUT_FILE="$DIST_DIR/${THEME_SLUG}-${STAMP}.zip"

if [[ ! -d "$THEME_DIR" ]]; then
  echo "Theme directory not found: $THEME_DIR" >&2
  exit 1
fi

mkdir -p "$DIST_DIR"

(
  cd "$(dirname "$THEME_DIR")"
  zip -r "$OUT_FILE" "$THEME_SLUG" \
    -x "*/.DS_Store" "*/node_modules/*" "*/.git/*" "*/dist/*" >/dev/null
)

echo "Created: $OUT_FILE"

