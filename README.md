# Secure Login Defender
**Built on Android (Termux) in Nsangi, Kampala — No laptop needed**

By **Okello Desmond** | @deshacker1 | Safe Coder Level 5: Defender (13 Sept 2026)

### 🔴 Try to Hack It
Paste this payload:
**Result:** My code neutralizes it with `htmlspecialchars()` — safe text, never executed.

### 🛡️ Security Features
- XSS Protection: `htmlspecialchars($input, ENT_QUOTES, 'UTF-8')`
- Input Validation + length limits
- DNS Hardening: Fixed Termux `/etc/resolv.conf` bug `[::1]:53` → `1.1.1.1 / 8.8.8.8`
- Secure logging without sensitive data
- Security headers

### 💻 How to Run (Termux)
```bash
php -S 127.0.0.1:8080
./cloudflared tunnel --edge-ip-version 4 --url http://127.0.0.1:8080

After pasting:
1. Tap **Preview** tab to see how beautiful it looks
2. Then scroll down > **Commit changes** > **Commit directly to main**

Then show me the preview screenshot!
